<?php

namespace App\Repository\User;

use App\Enums\AccessTokenEnum;
use App\Models\AccessToken;
use App\Models\User;
use App\Repository\BaseRepository;
use App\Repository\EntityRepositoryInterface;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserRepository extends BaseRepository implements EntityRepositoryInterface
{
    private $model;
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function checkToken(string $token): bool
    {
        $user = $this->model->newQuery()
            ->where('access_token','=', $token)
            ->first();
            if($user){
                $personal_token = AccessToken::
                where('entity','=', 'user')
                ->where('entity_id','=',$user->id)
                ->where('token','=',$token)
                ->first();
            if($personal_token){
                $now = date('Y-m-d H:i:s');
                if($personal_token->expires_at < $now){
                    return false;
                }
                //Atualizando a ultima data de acesso
                $personal_token->last_used_at = date('Y-m-d H:i:s',time());
                $personal_token->save();
                return true;
            }else
                return false;
        }
        else
            return false;
    }

    public function login(string $email, string $password)
    {
        $user = $this->model->newQuery()
            ->where('email', $email)
            ->first();

        if (!empty($user)) {
            
            //Verificação de senha conforme o tipo de Password
            if($user->password_type == 'md5'){
                if(!Hash::check($password,$user->password)){
                    return 'Senha incorreta';
                }
            }

        }
        unset($user->password);
        return $user;
    }
    public function checkPhoneExists(String $email)
    {
        return $this->model->newQuery()
            ->where('email', $email)
            ->exists();
    }
   
    public function register(array $request)
    {
        //tratando o numero do telefone
        $check = $this->checkPhoneExists($request['email']);
        if ($check == false) {
            

            DB::beginTransaction();
            try {

                $data = [
                    'name' => $request['name'],
                    'email' => $request['email'],
                    'password' => Hash::make($request['password']),
                ];

                $new = $this->model->newQuery()->create($data);
                DB::commit();
                
                return $new;
            } catch (Exception $e) {
                DB::rollBack();
                return $e->getMessage();
            }
            
        }
        return 'Este Email já existe, escolha outro para realizar o registro!';
    }
    public function personalAccessCreate($user,$token){
        $personal_access = AccessToken::where('entity', 'user')->where('entity_id', $user->id)->first();
        if($personal_access){
            $personal_access->update([
                'token'=>$token,
                'expires_at' => date('Y-m-d H:i:s',strtotime('+1 DAY'))
            ]);

        }else{
            //criando registro de token
            $personal_access = AccessToken::create([
                'token'=>$token,
                'entity' => AccessTokenEnum::User,
                'entity_id' => $user->id,
                'expires_at' => date('Y-m-d H:i:s',strtotime('+1 DAY'))
            ]);
        }
        return $personal_access->token;
    }
    public function findById(int $modelId, array $columns = ['*'])
    {
        return $this->model->newQuery()
        ->select($columns)
        ->where('id', $modelId)
        ->first();
    }
}

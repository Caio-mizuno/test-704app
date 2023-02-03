<?php

namespace App\Repository\Driver;

use App\Enums\AccessTokenEnum;
use App\Models\AccessToken;
use App\Models\Driver;
use App\Repository\BaseRepository;
use App\Repository\EntityRepositoryInterface;
use Exception;
use Illuminate\Support\Facades\Hash;

class DriverRepository extends BaseRepository implements EntityRepositoryInterface
{
    private $model;
    public function __construct(Driver $model)
    {
        $this->model = $model;
    }

    public function checkToken(string $token): bool
    {
        $driver = $this->model->newQuery()
            ->where('access_token','=', $token)
            ->first();
            if($driver){
                $personal_token = AccessToken::
                where('entity','=', 'driver')
                ->where('entity_id','=',$driver->id)
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

    public function login(string $phoneNumber, string $password)
    {
        $driver = $this->model->newQuery()
            ->where('phone_number', $phoneNumber)
            ->first();

        if (!empty($driver)) {
            
            //Verificação de senha conforme o tipo de Password
            if($driver->password_type == 'md5'){
                if($driver->password != md5($password)){
                    return 'Senha incorreta';
                }else if(!Hash::check($password,$driver->password)){
                    return 'Senha incorreta';
                }
            }

            //Verificando se o motorista está bloqueado
            if ($driver->is_blocked == true) {
                $begin = date('Y-m-d', time());
                $end   = date('Y-m-d', strtotime($driver->dt_block_expired));
                if ($begin > $end) {
                    $driver->is_blocked = false;
                    $driver->dt_block_expired = null;
                    $driver->save();
                }
            }

            
        }
        unset($driver->password);
        return $driver;
    }
    public function checkPhoneExists(String $phone_number)
    {
        return $this->model->newQuery()
            ->where('phone_number', $phone_number)
            ->exists();
    }
   
    public function register(array $request)
    {
        //tratando o numero do telefone
        $request['phone_number'] =  preg_replace('/[\(\)\-\s]/', '', $request['phone_number']);
        $check = $this->checkPhoneExists($request['phone_number']);
        if ($check == false) {
            

            DB::beginTransaction();
            try {
                $data = [
                    'first_name' => $request['first_name'],
                    'last_name' => $request['last_name'],
                    'payment_style' => json_encode(["money", "credit_card"]),
                    'password' => Hash::make($request['password']),
                    'phone_number' => $request['phone_number'],
                    'email' => $request['email'],
                    'gender' => $request['gender'],
                    'cpf' => $request['cpf'] ?? null,
                ];

                $new = $this->model->newQuery()->create($data);
                DB::commit();
                
                return $new;
            } catch (Exception $e) {
                DB::rollBack();
                return $e->getMessage();
            }
            
        }
        return 'Número de Telefone já existe';
    }
    public function personalAccessCreate($driver,$token){
        $personal_access = AccessToken::where('entity', 'driver')->where('entity_id', $driver->id)->first();
        if($personal_access){
            $personal_access->update([
                'name'=>$driver->first_name.' '.$driver->last_name,
                'token'=>$token,
                'expires_at' => date('Y-m-d',strtotime('+1 DAY'))
            ]);

        }else{
            //criando registro de token
            $personal_access = AccessToken::create([
                'name'=>$driver->first_name.' '.$driver->last_name,
                'token'=>$token,
                'entity' => AccessTokenEnum::Driver,
                'entity_id' => $driver->id,
                'expires_at' => date('Y-m-d',strtotime('+1 DAY'))
            ]);
        }
        return $personal_access->token;
    }
}

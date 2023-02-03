<?php

namespace App\Repository\Driver;

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
   
    public function register(array $request)
    {
        
    }
}

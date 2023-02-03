<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Drivers\DriverLoginRequest;
use App\Repository\Driver\DriverRepository;
use Illuminate\Http\Request;

class LoginDriversController extends Controller
{
    private $driverRepo;

    public function __construct(DriverRepository $driver){
        $this->driverRepo = $driver;
    }

    public function __invoke(DriverLoginRequest $request){
        $data = $request->all();
        
        $driver = $this->driverRepo->login($data['phone_number'], $data['password']);
        
        if($driver){

            $token = MakeJwt([
                'data' => [
                    'iss' => 'mooveapp',
                    'name' => $driver->first_name,
                    'email' => $driver->email,
                    'phone_number' => $driver->phone_number,
                    'time' => 'today'.time()
                ]
            ]);
            $driver->access_token = $token;
            $driver->save();
            
            
            return  $this->responseSuccess(
                array(
                    'driver' => $driver,
                    'error'     => null,
                    'token'     => $token,
                ));
        }
        else{
            return  $this->responseError([
                'error' => "Problemas ao encontrar Motorista. Telefone ou senha podem estar inválidos!"
            ]);
        }
    }
    
}

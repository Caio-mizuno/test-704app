<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\UserLoginRequest;
use App\Repository\User\UserRepository;
use Illuminate\Http\Request;

class LoginUsersController extends Controller
{
    private $userRepo;

    public function __construct(UserRepository $user){
        $this->userRepo = $user;
    }
    
    public function __invoke(UserLoginRequest $request){
        $data = $request->all();
        $user = $this->userRepo->login($data['email'], $data['password']);
        if($user){

            $token = MakeJwt([
                'data' => [
                    'iss' => 'sdgh4262g',
                    'name' => $user->name,
                    'email' => $user->email,
                    'time' => 'today'.time()
                ]
            ]);
            $user->access_token = $token;
            $user->save();
            
            //Criando registro de login com Token de expiração
            $this->userRepo->personalAccessCreate($user, $token);
            
            return  $this->responseSuccess(
                array(
                    'user'      => $user,
                    'error'     => null,
                    'token'     => $token,
                ));
        }
        else{
            return  $this->responseError([
                'error' => "Problemas ao encontrar Usuário. Telefone ou senha podem estar inválidos!"
            ]);
        }
    }
}

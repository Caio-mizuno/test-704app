<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\UserRegisterRequest;
use App\Repository\User\UserRepository;
use Illuminate\Http\Request;

class RegisterUsersController extends Controller
{
    private $userRepo;

    public function __construct(UserRepository $user){
        $this->userRepo = $user;
    }
    
    public function __invoke(UserRegisterRequest $request){
        $user = $this->userRepo->register($request->all());
        
        if($user){

            return $this->responseSuccess(
                array('user' => $user,)
            );
        }
        else{
            return  $this->responseError([
                'error' => "Problemas ao encontrar Usuário. Email ou senha podem estar inválidos!"
            ]);
        }
    }
}

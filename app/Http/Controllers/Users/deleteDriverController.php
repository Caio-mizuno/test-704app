<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\DriverIdRequest;
use App\Http\Requests\Users\UserRegisterRequest;
use App\Repository\User\UserActionsRepository;
use App\Repository\User\UserRepository;
use Illuminate\Http\Request;

class deleteDriverController extends Controller
{
    private $userRepo;

    public function __construct(UserActionsRepository $user){
        $this->userRepo = $user;
    }
    
    public function __invoke(DriverIdRequest $request){
        $user = $this->userRepo->deleteDriver($request->driver_id);
        
        if($user){
            return $this->responseSuccess(
                array('message' => 'Motorista deletado com sucesso!',)
            );
        }
        else{
            return  $this->responseError([
                'error' => "Problemas ao encontrar Motorista."
            ]);
        }
    }
}
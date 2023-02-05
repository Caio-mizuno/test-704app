<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Drivers\DriverRegisterRequest;
use App\Repository\User\UserActionsRepository;
use Illuminate\Http\Request;

class createDriverController extends Controller
{
    private $userRepo;

    public function __construct(UserActionsRepository $user){
        $this->userRepo = $user;
    }
    
    public function __invoke(DriverRegisterRequest $request){
        $result = $this->userRepo->createDriver($request->all());
        
        if($result){
            return $this->responseSuccess(
                array('driver' => $result)
            );
        }
        else{
            return  $this->responseError([
                'error' => "Problemas ao encontrar Motorista."
            ]);
        }
    }
}

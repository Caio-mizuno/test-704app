<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\DriverIdRequest;
use App\Repository\User\UserActionsRepository;
use Illuminate\Http\Request;

class showDriverController extends Controller
{
    private $userRepo;

    public function __construct(UserActionsRepository $user){
        $this->userRepo = $user;
    }
    
    public function __invoke(DriverIdRequest $request){
        $result = $this->userRepo->showDriver($request->driver_id);
        if(!is_string($result)){
            return $this->responseSuccess($result);
        }
        else{
            return  $this->responseError([
                'error' => "Problemas ao encontrar Motorista."
            ]);
        }
    }
}

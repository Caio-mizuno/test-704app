<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\DriverUpdateRequest;
use App\Repository\User\UserActionsRepository;
use Illuminate\Http\Request;

class updateDriverController extends Controller
{
    private $userRepo;

    public function __construct(UserActionsRepository $user){
        $this->userRepo = $user;
    }
    
    public function __invoke(DriverUpdateRequest $request){
        $results = $this->userRepo->updateDriver($request->all());
        
        if($results){
            return $this->responseSuccess(
                array('driver' => $results)
            );
        }
        else{
            return  $this->responseError([
                'error' => "Problemas ao encontrar Motoristas."
            ]);
        }
    } 
}

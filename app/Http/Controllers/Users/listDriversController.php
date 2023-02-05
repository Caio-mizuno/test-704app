<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Repository\User\UserActionsRepository;
use Illuminate\Http\Request;

class listDriversController extends Controller
{
    private $userRepo;

    public function __construct(UserActionsRepository $user){
        $this->userRepo = $user;
    }
    
    public function __invoke(Request $request){
        $results = $this->userRepo->listDriver();
        
        if($results){
            return $this->responseSuccess(
                array('data' => $results)
            );
        }
        else{
            return  $this->responseError([
                'error' => "Problemas ao encontrar Motoristas."
            ]);
        }
    } 
}

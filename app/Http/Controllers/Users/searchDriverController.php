<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\DriverIdRequest;
use App\Http\Requests\Users\SearchDriverRequest;
use App\Repository\User\UserActionsRepository;
use Illuminate\Http\Request;

class searchDriverController extends Controller
{
    private $userRepo;

    public function __construct(UserActionsRepository $user){
        $this->userRepo = $user;
    }
    
    public function __invoke(SearchDriverRequest $request){
        $result = $this->userRepo->searchDriver($request->all());
        if(!is_string($result)){
            return $this->responseSuccess(['results'=>$result]);
        }
        else{
            return  $this->responseError([
                'error' => "Problemas ao encontrar Motorista."
            ]);
        }
    }
}

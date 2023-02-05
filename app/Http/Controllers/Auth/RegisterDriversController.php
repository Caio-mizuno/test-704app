<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Drivers\DriverRegisterRequest;
use App\Repository\Driver\DriverRepository;
use Illuminate\Http\Request;

class RegisterDriversController extends Controller
{
    private $driverRepo;

    public function __construct(DriverRepository $driver){
        $this->driverRepo = $driver;
    }

    public function __invoke(DriverRegisterRequest $request){
        $driver = $this->driverRepo->register($request->all());
        
        if($driver){

            return $this->responseSuccess(
                array('driver' => $driver,)
            );
        }
        else{
            return  $this->responseError([
                'error' => "Problemas ao encontrar Motorista. Telefone ou senha podem estar inválidos!"
            ]);
        }
    }
}

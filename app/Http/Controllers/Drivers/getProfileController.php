<?php

namespace App\Http\Controllers\Drivers;

use App\Http\Controllers\Controller;
use App\Repository\Driver\DriverProfileRepository;
use Illuminate\Http\Request;

class getProfileController extends Controller
{
    private $driverRepo;

    public function __construct(DriverProfileRepository $driver){
        $this->driverRepo = $driver;
    }

    public function __invoke(Request $request){
        $driver = $this->driverRepo->getProfile($request->access_token);
        
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

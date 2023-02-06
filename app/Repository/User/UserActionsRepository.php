<?php

namespace App\Repository\User;

use App\Models\Driver;
use App\Models\Vehicle;
use App\Repository\BaseRepository;
use App\Repository\Driver\DriverProfileRepository;
use App\Repository\Driver\DriverRepository;
use App\Repository\Vehicle\VehicleRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;

class UserActionsRepository extends BaseRepository
{
    private $model;
    private $driverRepo;
    public function __construct(User $model)
    {
        $this->model = $model;
        $this->driverRepo = new DriverProfileRepository(new Driver());
    }

    public function deleteDriver(int $id){
        return !is_string($this->driverRepo->deleteById($id))?true:false;
    }
   
    public function listDriver(){
        return $this->driverRepo->list();
    }
    public function updateDriver(Array $request){
        return $this->driverRepo->updateProfileById($request['driver_id'],$request);
    }

    public function showDriver(int $id){
        $driver = $this->driverRepo->findById($id);
        if(!empty($driver)){
            $vehicleRepo = new VehicleRepository(new Vehicle);
            $car = $vehicleRepo->findById($driver->vehicle_id);
            
            return['driver'=> $driver,'vehicle'=>$car];
        
        } else
            return 'Motorista não encontrado.';
    }

    public function createDriver(Array $request){
        $driverRepo = new DriverRepository(new Driver());
        return $driverRepo->register($request);
    }

    public function searchDriver(Array $request){
        $driverRepo = new DriverRepository(new Driver());
        return $driverRepo->searchDriver($request);
    }
}

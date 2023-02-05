<?php

namespace App\Repository\User;

use App\Models\Driver;
use App\Repository\BaseRepository;
use App\Repository\Driver\DriverProfileRepository;
use App\Repository\Driver\DriverRepository;
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

    public function createDriver(Array $request){
        $driverRepo = new DriverRepository(new Driver());
        return $driverRepo->register($request);
    }
}

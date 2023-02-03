<?php

namespace App\Repository\Vehicle;

use App\Models\Vehicle;
use App\Repository\BaseRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use App\Enums\RideModelEnum;
use App\Models\Driver;

class VehicleRepository extends BaseRepository
{
    private $model;
    public function __construct(Vehicle $model)
    {
        $this->model = $model;
    }
    public function checkExistPlate(String $plate,Driver $driver)
    {
        $vehicle = $this->model->newQuery()->where('plate', $plate)->exists();
        return $vehicle;
    }
    
    
}

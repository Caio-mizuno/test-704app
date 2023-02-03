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
    
    public function createVehicle(Array $request)
    {
        DB::beginTransaction();
            try {
                $vehicle = $this->model->newQuery()->create([
                    "plate"      => $request['plate'] ?? null,
                    "year"       => $request['year'] ?? null,
                    "model"      => $request['model'] ?? null,
                    "brand"      => $request['brand'] ?? null,
                    "color"      => $request['color'] ?? null,
                    "renavam"    => $request['renavam'] ?? null,
                    "ride_model" => $request['ride_model']??RideModelEnum::Basic,
                ]);
                DB::commit();
                return $vehicle;
            } catch (Exception $e) {
                DB::rollBack();
                return $e->getMessage();
            }
    }

    
}

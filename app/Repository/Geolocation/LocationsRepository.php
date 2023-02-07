<?php

namespace App\Repository\Geolocation;

use App\Models\Driver;
use App\Models\OnlineDriver;
use App\Models\Vehicle;
use App\Repository\BaseRepository;
use App\Repository\Driver\DriverProfileRepository;
use App\Repository\Driver\DriverRepository;
use App\Repository\Vehicle\VehicleRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;

class LocationsRepository extends BaseRepository
{
    private $model;
    public function __construct(OnlineDriver $model)
    {
        $this->model = $model;
    }

    public function updateGPS(String $token, array $request)
    {
        $driver = Driver::where('access_token', $token)->first();
        if ($driver) {
            $online = OnlineDriver::where('driver_id', $driver->id)->first();
            if ($online) {
                DB::beginTransaction();
                try {
                    $online->latitude = $request['latitude'];
                    $online->longitude = $request['longitude'];
                    $online->save();
                    DB::commit();
                    return $online;
                } catch (Exception $er) {
                    DB::rollBack();
                    return $er->getMessage();
                }
            } else {
                DB::beginTransaction();
                try {
                    $new_online = OnlineDriver::create([
                        'driver_id' => $driver->id,
                        'latitude'  => $request['latitude'],
                        'longitude'  => $request['longitude']
                    ]);
                    DB::commit();
                    return $new_online;
                } catch (Exception $er) {
                    DB::rollBack();
                    return $er->getMessage();
                }
            }
        } else {
            return 'Motorista não encontrado';
        }
    }
}

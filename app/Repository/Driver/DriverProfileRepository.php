<?php

namespace App\Repository\Driver;

use App\Models\Driver;
use App\Models\Vehicle;
use App\Repository\BaseRepository;
use App\Repository\Vehicle\VehicleRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DriverProfileRepository extends BaseRepository
{
    private $model;
    public function __construct(Driver $model)
    {
        $this->model = $model;
    }
   
    public function getProfile(string $token)
    {
        $driver = $this->model->newQuery()->where('access_token', $token)->first();
        if (!empty($driver)) {
            return [
                "first_name" => $driver->first_name,
                "phone_number" => $driver->phone_number,
                "email" => $driver->email,
                "cpf" => $driver->cpf,
                "last_name" => $driver->last_name,
                "birth_date" => date('d/m/Y', strtotime($driver->birth_date)),
                "gender" => $driver->gender,
                "license" => $driver->license,
                "dt_license_expired" => $driver->dt_license_expired,
            ];
        } else
            return "Motorista inexistente ou não localizado.";
    }

   
    public function updateProfile(string $token, array $request)
    {
        $driver = $this->model->newQuery()->where('access_token', $token)->first();
        if ($driver) {

            if (!empty($request['cpf'])) {
                    $driver->cpf = $request['cpf'];
            }

            if (!empty($request['first_name'])) {
                $driver->first_name = $request['first_name'];
            }

            if (!empty($request['last_name'])) {
                $driver->last_name = $request['last_name'];
            }

            if (!empty($request['email'])) {
                $driver->email = $request['email'];
            }

            if (!empty($request['phone_number'])) {
                $check = $this->model->newQuery()
                            ->where('phone_number', $request['phone_number'])
                            ->exists();
                $driver->phone_number = ($check == false)?$request['phone_number']:$driver->phone_number;
            }

            if (!empty($request['gender'])) {
                $driver->gender = $request['gender'];
            }

            if (!empty($request['license'])) {
                $driver->license = $request['license'];
            }

            if (!empty($request['dt_license_expired'])) {
                $driver->dt_license_expired = $request['dt_license_expired'];
            }

            if (!empty($request['password'])) {
                $driver->password = Hash::make($request['password']);
            }

            if (!empty($request['payment_methods'])) {
                $driver->gender = json_encode($request['payment_methods']);
            }
            DB::beginTransaction();
            try{
                $driver->save();
                DB::commit();
                return $driver;
            }catch(Exception $err){
                DB::rollBack();
                return $err->getMessage();
            }
           
        } else
            return 'Motorista inexistente ou não localizado';
    }
    public function updateProfileById(int $id, array $request)
    {
        $driver = $this->model->newQuery()->where('id', $id)->first();
        if ($driver) {


            if (!empty($request['phone_number'])) {
                $check = $this->model->newQuery()
                            ->where('phone_number', $request['phone_number'])
                            ->exists();
                $driver->phone_number = ($check == false)?$request['phone_number']:$driver->phone_number;
            }

            if (!empty($request['cpf'])) {
                    $driver->cpf = $request['cpf'];
            }

            if (!empty($request['first_name'])) {
                $driver->first_name = $request['first_name'];
            }

            if (!empty($request['last_name'])) {
                $driver->last_name = $request['last_name'];
            }

            if (!empty($request['email'])) {
                $driver->email = $request['email'];
            }

            if (!empty($request['gender'])) {
                $driver->gender = $request['gender'];
            }

            if (!empty($request['license'])) {
                $driver->license = $request['license'];
            }

            if (!empty($request['dt_license_expired'])) {
                $driver->dt_license_expired = $request['dt_license_expired'];
            }

            if (!empty($request['password'])) {
                $driver->password = Hash::make($request['password']);
            }

            if (!empty($request['payment_methods'])) {
                $driver->gender = json_encode($request['payment_methods']);
            }

            DB::beginTransaction();
            try{
                $driver->save();
                DB::commit();
                return $driver;
            }catch(Exception $err){
                DB::rollBack();
                return $err->getMessage();
            }

        } else
            return 'Motorista inexistente ou não localizado';
    }
    public function deleteById(int $id){
        $driver =  $this->model->newQuery()
            ->where('id', $id)
            ->first();

        if ($driver) {

            DB::beginTransaction();
            try{
    
                $driver->delete();
    
                DB::commit();
    
                return true;

            }catch(Exception $err){
                DB::rollBack();
                return $err->getMessage();
            }
        } else
            return 'Motorista inexistente ou não localizado';
    }
    public function list(){
        $drivers =  $this->model->newQuery()->paginate();
        if ($drivers) {
            return $drivers;
        } else
            return 'Motoristas inexistentes ou não localizados';
    }

    
}

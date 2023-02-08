<?php

namespace App\Http\Controllers\Drivers;

use App\Console\Commands\UpdateGps;
use App\Http\Controllers\Controller;
use App\Jobs\updateGpsJob;
use App\Repository\Geolocation\LocationsRepository;
use Illuminate\Http\Request;

class updateLocationController extends Controller
{
    private $driverRepo;

    public function __construct(LocationsRepository $driver)
    {
        $this->driverRepo = $driver;
    }

    public function __invoke(Request $request)
    {
        updateGpsJob::dispatch($request->header('TOKEN'), $request->all());
        //TOKEN gerado pelo Login, porém passando pelo HEADER
        // $driver = $this->driverRepo->updateGPS($request->header('TOKEN'),$request->all());

        // if ($driver) {

        //     return $this->responseSuccess(
        //         array('driver' => $driver,
        //         )
        //     );
        // } else {
        //     return $this->responseError([
        //         'error' => "Problemas ao encontrar Motorista. Telefone ou senha podem estar inválidos!"
        //     ]);
        // }
    }
}

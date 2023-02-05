<?php

namespace App\Http\Middleware;

use App\Models\AccessToken;
use App\Models\Driver;
use App\Repository\Driver\DriverRepository;
use Closure;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use App\Traits\ResponseJsonTrait;

class DriverCheckToken
{
    use ResponseJsonTrait;
    private $driverRepository;
    public function __construct()
    {
        $driver_model = new Driver();
        $this->driverRepository = new DriverRepository($driver_model);
    }
    public function handle($request, Closure $next)
    {

        try {


            $tokenDecoded = json_decode($request->header('Authorization'));

            if (!is_object($tokenDecoded)) {
                $data = jwt_decode($request->header('Authorization'));

                $driver = Driver::where('phone_number', $data['payload']->data->phone_number)->first();
                if ($driver) {
                     //Verificando se o token está válido
                    $check = $this->driverRepository->checkToken($driver->access_token);
                    if ($check) {
                        $request->headers->set('Authorization', $data);
                        return $next($request);
                    } else {
                        return $this->responseError([
                            'error' => 'Necessário realizar o login novamente!',
                        ]);
                    }
                } else {
                    return $this->responseError([
                        'error' => 'Motorista não encontrado!',
                    ]);
                }
            } else {
                return $this->responseError([
                    'error' => 'Token inválido!',
                ]);
            }
        } catch (\Exception $e) {
            return $this->responseError([
                'error' => 'Token inválido!',
            ]);
        }
    }
}

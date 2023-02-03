<?php

namespace App\Http\Middleware;

use App\Models\AccessToken;
use App\Models\Driver;
use App\Models\People;
use App\Repository\Driver\DriverRepository;
use Closure;
use Illuminate\Support\Facades\Redirect;
use \GuzzleHttp\Client;
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

                $driver = Driver::where('phone_number', $data['payload']->data->phoneNumber)->first();
                if ($driver) {
                    $request->headers->set('Authorization', $data);
                    return $next($request);
                } else {
                    return $this->responseError([
                        'error' => 'Token inválido!',
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

<?php

namespace App\Http\Middleware;

use App\Models\AccessToken;
use App\Repository\User\UserRepository;
use Closure;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use App\Traits\ResponseJsonTrait;
use Illuminate\Foundation\Auth\User;

class UsersCheckToken
{
    use ResponseJsonTrait;
    private $userRepository;
    public function __construct()
    {
        $this->userRepository = new UserRepository(new User);
    }
    public function handle($request, Closure $next)
    {

        try {

            $tokenDecoded = json_decode($request->header('Authorization'));

            if (!is_object($tokenDecoded)) {
                $data = jwt_decode($request->header('Authorization'));

                $user = User::where('email', $data['payload']->data->email)->first();
                if ($user) {
                    
                    //Verificando se o token está válido
                    $access = $this->userRepository->checkToken($user->access_token);
                    if (!empty($access)) {
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

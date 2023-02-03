<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Response;

trait ResponseJsonTrait
{
    public function responseSuccess(array $data = [], int $status_code = 200): JsonResponse
    {
        return Response::json(
            array_merge(['success' => true], $data), $status_code);
    }

    public function responseError(array $data = [], int $status_code = 500): JsonResponse
    {
        return Response::json(
            array_merge(['success' => false], $data), $status_code);
    }
}

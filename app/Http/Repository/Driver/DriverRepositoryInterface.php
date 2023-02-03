<?php

declare(strict_types=1);

namespace App\Repository\Driver;

use App\Repository\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;

interface DriverRepositoryInterface extends RepositoryInterface
{
    public function login(string $phoneNumber, string $password);
    public function register(array $request);
    public function checkToken(int $userId, string $token): bool;
}

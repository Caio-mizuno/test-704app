<?php

namespace App\Providers;

use App\Repository\Driver\DriverRepository;
use App\Repository\Driver\DriverRepositoryInterface;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public function register()
    {
        $this->app->singleton(
            DriverRepositoryInterface::class,
            DriverRepository::class,
        );
    }
}

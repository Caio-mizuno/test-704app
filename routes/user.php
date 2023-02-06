<?php

use App\Http\Controllers\Auth\LoginUsersController;
use App\Http\Controllers\Auth\RegisterUsersController;
use App\Http\Controllers\Users\createDriverController;
use App\Http\Controllers\Users\deleteDriverController;
use App\Http\Controllers\Users\listDriversController;
use App\Http\Controllers\Users\showDriverController;
use App\Http\Controllers\Users\updateDriverController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('login', LoginUsersController::class);
Route::post('register', RegisterUsersController::class);
Route::middleware(['user.token'])->group(function () {
    Route::get('drivers', listDriversController::class);
    Route::get('driver', showDriverController::class);
    Route::post('driver', createDriverController::class);
    Route::put('driver', updateDriverController::class);
    Route::delete('driver', deleteDriverController::class);
});
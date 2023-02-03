<?php

use App\Http\Controllers\Auth\LoginDriversController;
use App\Http\Controllers\Auth\RegisterDriversController;

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
Route::post('login', LoginDriversController::class);
Route::post('register', RegisterDriversController::class);

Route::middleware(['driver.token'])->group(function () {
});

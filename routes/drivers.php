<?php
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
Route::post('login', DriverLoginController::class);
Route::post('register', DriverRegisterController::class);
Route::post('recover_password', DriverRecouveryPassController::class);

Route::middleware(['driver.token'])->group(function () {
    //deleta a conta do motorista        
    Route::get('delete_account', deleteAccountController::class);

    
    
});

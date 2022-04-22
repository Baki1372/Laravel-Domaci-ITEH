<?php

use App\Http\Controllers\AuthentificationController;
use App\Http\Controllers\KupacController;
use App\Http\Controllers\SlikarController;
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

Route::post('register', [AuthentificationController::class, 'register']);
Route::post('login', [AuthentificationController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::resource('slikar', SlikarController::class);
    Route::resource('kupac', KupacController::class);
    Route::post('logout', [AuthentificationController::class, 'logout']);
});

<?php

use App\Http\Controllers\BusController;
use App\Http\Controllers\BusRouteController;
use App\Http\Controllers\BusSeatController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/buses', [BusController::class,'index']);

Route::post('/buses', [BusController::class,'store']);

Route::patch('/buses/{bus}', [BusController::class,'update']);

Route::delete('/buses/{bus}', [BusController::class,'destroy']);

Route::get('/bus_routes', [BusRouteController::class,'index']);

Route::post('/bus_routes', [BusRouteController::class,'store']);

Route::patch('/bus_routes/{bus_route}', [BusRouteController::class,'update']);

Route::delete('/bus_routes/{bus_route}', [BusRouteController::class,'destroy']);

Route::get('/bus_seats', [BusSeatController::class,'index']);

Route::post('/bus_seats', [BusSeatController::class,'store']);

Route::patch('/bus_seats/{bus_seat}', [BusSeatController::class,'update']);

Route::delete('/bus_seats/{bus_seat}', [BusSeatController::class,'destroy']);
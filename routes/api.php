<?php

use App\Http\Controllers\BusController;
use App\Http\Controllers\BusRouteController;
use App\Http\Controllers\BusScheduleBookingController;
use App\Http\Controllers\BusScheduleController;
use App\Http\Controllers\BusSeatController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\UserController;
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

Route::get('/routes', [RouteController::class,'index']);

Route::post('/routes', [RouteController::class,'store']);

Route::patch('/routes/{route}', [RouteController::class,'update']);

Route::delete('/routes/{route}', [RouteController::class,'destroy']);

Route::get('/bus_schedules', [BusScheduleController::class,'index']);

Route::post('/bus_schedules', [BusScheduleController::class,'store']);

Route::patch('/bus_schedules/{bus_schedule}', [BusScheduleController::class,'update']);

Route::delete('/bus_schedules/{bus_schedule}', [BusScheduleController::class,'destroy']);

Route::get('/bus_schedule_bookings', [BusScheduleBookingController::class,'index']);

Route::post('/bus_schedule_bookings', [BusScheduleBookingController::class,'store']);

Route::patch('/bus_schedule_bookings/{bus_schedule_booking}', [BusScheduleBookingController::class,'update']);

Route::delete('/bus_schedule_bookings/{bus_schedule_booking}', [BusScheduleBookingController::class,'destroy']);

Route::get('/super_admins', [SuperAdminController::class,'index']);

Route::post('/super_admins', [SuperAdminController::class,'store']);

Route::patch('/super_admins/{super_admin}', [SuperAdminController::class,'update']);

Route::delete('/super_admins/{super_admin}', [SuperAdminController::class,'destroy']);

Route::get('/users', [UserController::class,'index']);

Route::post('/users', [UserController::class,'store']);
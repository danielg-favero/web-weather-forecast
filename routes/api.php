<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ForecastController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ForecastApiController;
use App\Http\Controllers\CityApiController;

Route::get('/forecast/current', [ForecastApiController::class, 'show']);
Route::get('/forecast', [ForecastController::class, 'show']);
Route::get('/forecast/{id}', [ForecastController::class, 'index']);
Route::post('/forecast', [ForecastController::class, 'create']);

Route::get('/location', [LocationController::class, 'show']);
Route::get('/location/{id}', [LocationController::class, 'index']);
Route::post('/location', [LocationController::class, 'create']);

Route::get('/cities/{zipCode}', [CityApiController::class, 'getByZipcode']);

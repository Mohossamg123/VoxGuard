<?php

use App\Http\Controllers\LocationController;
use App\Http\Controllers\ZoneController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/location', [LocationController::class, 'store']);

Route::post('/zones', [ZoneController::class,'store']);

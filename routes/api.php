<?php

use App\Http\Controllers\Travel\V1\TravelsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::apiResource(TravelsController::class);

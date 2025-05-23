<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SportController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/sports', [SportController::class, 'index']);

Route::get('/sports/{sport}', [SportController::class, 'show']);

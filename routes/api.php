<?php

use App\Http\Controllers\APICondoVidController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/condovid', [APICondoVidController::class, 'index']);

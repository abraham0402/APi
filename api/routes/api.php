<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\PostController;
use App\Http\Controllers\Api\V2\PostController2;
use App\Http\Controllers\Api\LoginController;

Route::apiResource('V1/posts',PostController::class)->middleware('auth:sanctum');


Route::apiResource('V2/posts',PostController2::class)->middleware('auth:sanctum');

Route::post('login',[LoginController::class,
    'login'

]);

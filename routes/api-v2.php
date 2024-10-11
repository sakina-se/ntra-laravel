<?php


use App\Http\Controllers\Api\V2\UserController;
use Illuminate\Support\Facades\Route;

Route::apiResource('users', UserController::class);

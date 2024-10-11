<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('v1/users', [App\Http\Controllers\Api\V1\UserController::class, 'index'])->name('users.v1.index');

Route::get('v2/users', [App\Http\Controllers\Api\V2\UserController::class, 'indexWithDetails'])->name('users.v2.index');

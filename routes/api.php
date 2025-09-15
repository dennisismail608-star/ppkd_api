<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\LoginController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/', function () {
    return response()->json('API Sudah bisa digunakan');
});

route::post('login', [loginController::class, 'login'])->name('login');


route::middleware('auth:sanctum')->group(function () {
    route::get('me', [loginController::class, 'me'])->name('me')->middleware('auth:sanctum');
    Route::apiResource('user', \App\Http\Controllers\API\UserController::class);
});

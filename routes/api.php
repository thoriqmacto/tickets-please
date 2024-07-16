<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// http://tickets-please/api/tickets/{id}/edit
// http://tickets-please/api/tickets/{id}/delete
// http://tickets-please/api/v1/tickets
// Resource:
// 1) tickets
// 2) users
// 3) contracts

Route::post('/login',[AuthController::class,'login']);
Route::post('/register',[AuthController::class,'register']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

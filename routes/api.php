<?php

use App\Http\Controllers\AuthController;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// http://tickets-please/api/tickets/{id}/edit
// http://tickets-please/api/tickets/{id}/delete
// Resource:
// 1) tickets
// 2) users
// 3) contracts

Route::post('/login',[AuthController::class,'login']);
Route::post('/register',[AuthController::class,'register']);

Route::get('/tickets',function(){
    return Ticket::all();
});

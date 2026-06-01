<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RsvpController;

Route::get('/', function () {
    return view('home');
});


Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);


// RSVP related routes
Route::post('/create-rsvp', [RsvpController::class, 'createRsvp']);
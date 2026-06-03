<?php

use App\Http\Controllers\RsvpController;
use App\Http\Controllers\UserController;
use App\Models\Rsvp;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $rsvps = [];
    $rsvps_no = [];
    $rsvp_count = 0;
    $rsvp_no_count = 0;
    $total_count = 0;
    if (auth()->check()) {
        $rsvps = Rsvp::where('attending', ['yes', 'maybe'])->get();
        $rsvps_no = Rsvp::where('attending', 'no')->get();
        $rsvp_count = Rsvp::where('attending', ['yes', 'maybe'])->where('event', 'june_7')->count();
        $rsvp_no_count = Rsvp::where('attending', ['no'])->count();
        $plus_one_count = Rsvp::where('event', 'june_7')->sum('plus_one');
        $total_count = $rsvp_count + $plus_one_count;
    }
    return view('home', [
        'rsvps' => $rsvps, 
        'rsvps_no' => $rsvps_no, 
        'rsvp_count' => $total_count, 
        'rsvp_no_count' => $rsvp_no_count
    ]);
});

Route::get('/admin', function () {
    return view('welcome');
});

Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/onepw', [UserController::class, 'onepw']);


// RSVP related routes
Route::post('/create-rsvp', [RsvpController::class, 'createRsvp']);


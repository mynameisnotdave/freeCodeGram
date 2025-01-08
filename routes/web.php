<?php

use App\Http\Controllers\JobListingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisteredUserController;

Route::view('/', 'home');
Route::view('/contact', 'contact');
Route::resource('jobs', JobListingController::class);

// Auth
Route::get('/register', [RegisteredUserController::class, 'create']);

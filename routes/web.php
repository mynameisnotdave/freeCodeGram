<?php

use App\Http\Controllers\JobListingController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/contact', 'contact');
Route::resource('jobs', JobListingController::class);

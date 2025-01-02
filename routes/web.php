<?php

use App\Http\Controllers\JobListingController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

/*Route::controller(JobListingController::class)->group(function() {
    Route::get('/jobs',  'index');
    Route::get('/jobs/create',  'create');
    Route::get('/jobs/{job}',  'show');
    Route::post('/jobs',  'store');
    Route::get('/jobs/{job}/edit',  'edit');
    Route::patch('/jobs/{job}',  'update');
    Route::delete('/jobs/{id}',  'destroy');
});*/

Route::resource('jobs', JobListingController::class);

// Contact page
Route::view('/contact', 'contact');

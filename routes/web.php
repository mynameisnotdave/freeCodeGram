<?php

use App\Http\Controllers\JobListingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\JobListing;

$rules = [
    'title' => ['required', 'min:3', 'alpha-dash'],
    'salary' => ['required', 'numeric', 'digits_between:4, 6']
];

Route::get('/', fn() => view('home'));

Route::get('/jobs', [JobListingController::class, 'index']);

// Create
Route::get('/jobs/create', fn() => view('jobs.create'));

// Show
Route::get('/jobs/{job}', function (JobListing $job) {
    return view('jobs.show', ['job' => $job]);
});

// Store
Route::post(
    '/jobs',
    function () use ($rules) {
        request()->validate($rules);

        JobListing::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1
        ]);
        return redirect('/jobs');
    }
);

// Edit
Route::get('/jobs/{job}/edit', function (JobListing $job) {
    return view('jobs.edit', ['job' => $job]);
});

// Update
Route::patch('/jobs/{job}', function (JobListing $job) use ($rules) {
    request()->validate($rules);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    return redirect('/jobs/' . $job->id);
});

// Delete
Route::delete('/jobs/{id}', function (JobListing $job) use ($rules) {

    $job->delete();

    return redirect("/jobs/");
});


Route::get('/contact', fn() => view('contact'));

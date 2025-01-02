<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\JobListing;

$rules = [
    'title' => ['required', 'min:3', 'alpha-dash'],
    'salary' => ['required', 'numeric', 'digits_between:4, 6']
];

Route::get('/', fn() => view('home'));

Route::get('/jobs', function () {
    // ::with()->get() eager loads and prevents excessive queries
    //$jobs = JobListing::with('employer')->get();
    // Even better is paginate...
    $jobs = JobListing::with('employer')->latest()->paginate(3);
    return view('jobs.index', ['jobs' => $jobs]);
});

// Create
Route::get('/jobs/create', fn() => view('jobs.create'));

// Show
Route::get('/jobs/{id}', function ($id) {
    $job = JobListing::find($id);
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
Route::get('/jobs/{id}/edit', function ($id) {
    $job = JobListing::find($id);
    return view('jobs.edit', ['job' => $job]);
});

// Update
Route::patch('/jobs/{id}', function ($id) use ($rules) {
    request()->validate($rules);

    $job = JobListing::findOrFail($id);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    return redirect('/jobs/{$job->id}');
    
});

// Delete
Route::delete('/jobs/{id}', function ($id) {
    $job = JobListing::findOrFail($id);

    $job->delete();

    return redirect("/jobs/" . $job->id);
});


Route::get('/contact', fn() => view('contact'));

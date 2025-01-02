<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobListing;

class JobListingController extends Controller
{
    private $rules = [
        'title' => ['required', 'min:3', 'alpha-dash'],
        'salary' => ['required', 'numeric', 'digits_between:4, 6']
    ];

    public function index()
    {
        //::with()->get() eager loads and prevents excessive queries
        $jobs = JobListing::with('employer')->get();
        //Even better is paginate...
        $jobs = JobListing::with('employer')->latest()->paginate(3);
        return view('jobs.index', ['jobs' => $jobs]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function show(JobListing $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    public function store()
    {
        request()->validate($this->rules);

        JobListing::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1
        ]);
        return redirect('/jobs');
    }

    public function edit(JobListing $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(JobListing $job)
    {
        request()->validate($this->rules);

        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);

        return redirect('/jobs/' . $job->id);
    }

    public function destroy(JobListing $job)
    {
        $job->delete();

        return redirect("/jobs/");
    }
}

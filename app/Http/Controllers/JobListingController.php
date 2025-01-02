<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobListing;

class JobListingController extends Controller
{
    //
    public function index()
    {
        //::with()->get() eager loads and prevents excessive queries
        $jobs = JobListing::with('employer')->get();
        //Even better is paginate...
        $jobs = JobListing::with('employer')->latest()->paginate(3);
        return view('jobs.index', ['jobs' => $jobs]);
    }

    public function create() {}

    public function show() {}

    public function store(Request $request) {}

    public function edit($id) {}

    public function update(Request $request, $id) {}

    public function destroy($id) {}
}

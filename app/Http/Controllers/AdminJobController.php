<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class AdminJobController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(model:Job::class, parameter: 'job');
    }
    public function index()
    {
        return view('admin.jobs.index', [
            'jobs' => Job::where('user_id', Auth::user()->id)->paginate(10)
        ]);
    }
    public function create()
    {
        return view('admin.jobs.create');
    }
    public function edit(Job $job)
    {
        return view('admin.jobs.edit', [
            'job' => $job,
        ]);
    }
    public function update(Job $job)
    {
        $attributes = request()->validate([
            'company_name' => 'required|max:255',
            'job_title' => 'required|max:255',
            'description' => 'required',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'responsibilities' => 'required|max:700',
            'start_date' => 'required|max:255|date',
            'finish_date' => 'max:255|date',
        ]);
        if(isset($attributes['thumbnail'])) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }
        $job->update($attributes);
        return back()->with('success', 'Saved!');
    }

    public function store()
    {
        $attributes = request()->validate([
            'company_name' => 'required|max:255',
            'job_title' => 'required|max:255',
            'description' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'responsibilities' => 'required|max:700',
            'start_date' => 'required|max:255|date',
            'finish_date' => 'max:255|date',

        ]);
        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        Job::create($attributes);
        return back()->with('success', 'Added!');
    }

    public function destroy(Job $job)
    {
        $job->delete();
        return back()->with('success', 'Job deleted!');
    }
}
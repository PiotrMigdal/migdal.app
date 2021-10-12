<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminProjectController extends Controller
{
    public function index()
    {
        return view('admin.projects.index');
    }
    public function create()
    {
        return view('admin.projects.create');
    }
    public function edit(Project $project)
    {
        return view('admin.projects.edit', [
            'project' => $project,
        ]);
    }
    public function update(Project $project)
    {
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'purpose' => 'required|max:500',
            'description' => 'required',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'photos' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'release_date' => 'max:255|date',
            'course_id' => 'numeric',
            'repository' => 'max:255|url',
        ]);
        $attributes['technologies'] = request('technologies');
        if(isset($attributes['thumbnail'])) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }
        $project->update($attributes);
        return back()->with('success', 'Saved!');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'purpose' => 'required|max:500',
            'description' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'photos' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'release_date' => 'max:255|date',
            'course_id' => 'numeric',
            'repository' => 'max:255|url',
        ]);
        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        $attributes['technologies'] = request('technologies');

        Project::create($attributes);
        return redirect(route('projects.index.admin'))->with('success', 'Added!');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return back()->with('success', 'Project deleted!');
    }
}

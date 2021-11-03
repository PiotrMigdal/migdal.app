<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class AdminProjectController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(model:Project::class, parameter: 'project');
    }
    public function index()
    {
        return view('admin.projects.index', [
            'projects' => Project::where('user_id', Auth::user()->id)->paginate(10)
        ]);
    }
    public function create()
    {
        return view('admin.projects.create', [
            'courses' => Course::where('user_id', Auth::user()->id)->get(),
        ]);
    }
    public function edit(Project $project)
    {
        return view('admin.projects.edit', [
            'project' => $project,
            'courses' => Course::where('user_id', Auth::user()->id)->get(),
        ]);
    }
    public function update(Project $project)
    {
        {
            $attributes = request()->validate([
            'name' => 'required|max:255',
            'purpose' => 'required|max:500',
            'description' => 'required',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'featured_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'release_date' => 'required|max:255|date',
            'course_id' => 'exists:courses,id|nullable',
            'repository' => 'max:255|url|nullable',
            ]);
            $attributes['technologies'] = request('technologies');
            if(isset($attributes['thumbnail'])) {
                $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
            }
            if(isset($attributes['featured_image'])) {
                $attributes['featured_image'] = request()->file('featured_image')->store('featured_image');
            }
            $project->update($attributes);
            return back()->with('success', 'Saved!');
        }
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'purpose' => 'required|max:500',
            'description' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'featured_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'release_date' => 'required|max:255|date',
            'course_id' => 'exists:courses,id|nullable',
            'repository' => 'max:255|url|nullable',
        ]);

        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        if(isset($attributes['featured_image'])) {
            $attributes['featured_image'] = request()->file('featured_image')->store('featured_image');
        }
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

// public function store()
// {
//     $attributes = request()->validate([
//         'name' => 'required|max:255',
//         'purpose' => 'required|max:500',
//         'description' => 'required',
//         'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//         'photos' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//         'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//         'release_date' => 'max:255|date',
//         'course_id' => 'numeric',
//         'repository' => 'max:255|url',
//     ]);
//     if(request()->hasfile('photos'))
//     {

//        foreach(request()->file('photos') as $photo)
//        {
//            $name=$photo->getClientOriginalName();
//            $photo->store('thumbnails');
//            $data[] = $name;
//        }
//     }
//     $attributes['user_id'] = auth()->id();
//     $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
//     $attributes['technologies'] = request('technologies');
//     $attributes['technologies'] = json_encode($data);
//     Project::create($attributes);
//     return redirect(route('projects.index.admin'))->with('success', 'Added!');
// }
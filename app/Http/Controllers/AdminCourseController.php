<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class AdminCourseController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(model:Course::class, parameter: 'course');
    }
    public function index()
    {
        return view('admin.courses.index', [
            'courses' => Course::where('user_id', Auth::user()->id)->paginate(10)
        ]);
    }
    public function create()
    {
        return view('admin.courses.create');
    }
    public function edit(Course $course)
    {
        return view('admin.courses.edit', [
            'course' => $course,
        ]);
    }
    public function update(Course $course)
    {
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'platform' => 'required|max:500',
            'description' => 'required',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'photos' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'start_date' => 'required|max:255|date',
            'finish_date' => 'max:255|date',
            'repository' => 'max:255|url',
            'url' => 'max:255|url',
        ]);
        $attributes['technologies'] = request('technologies');
        if(isset($attributes['thumbnail'])) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }
        $course->update($attributes);
        return back()->with('success', 'Saved!');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'platform' => 'required|max:500',
            'description' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'photos' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'start_date' => 'required|max:255|date',
            'finish_date' => 'max:255|date',
            'repository' => 'max:255|url',
            'url' => 'max:255|url',

        ]);
        $attributes['technologies'] = request('technologies');
        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        Course::create($attributes);
        return redirect(route('courses.index.admin'))->with('success', 'Added!');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return back()->with('success', 'Course deleted!');
    }
}
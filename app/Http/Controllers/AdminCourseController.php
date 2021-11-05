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
            'courses' => Course::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->paginate(10)
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
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'featured_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'start_date' => 'required|max:255|date',
            'finish_date' => 'max:255|date|after_or_equal:start_date',
            'repository' => 'max:255|url|nullable',
            'url' => 'max:255|url|nullable',
        ]);
        $attributes['technologies'] = request('technologies');
        if(isset($attributes['thumbnail'])) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }
        if(isset($attributes['featured_image'])) {
            $attributes['featured_image'] = request()->file('featured_image')->store('featured_image');
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
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'featured_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'start_date' => 'required|max:255|date',
            'finish_date' => 'max:255|date|after_or_equal:start_date',
            'repository' => 'max:255|url|nullable',
            'url' => 'max:255|url|nullable',

        ]);
        $attributes['technologies'] = request('technologies');
        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        if(isset($attributes['featured_image'])) {
            $attributes['featured_image'] = request()->file('featured_image')->store('featured_image');
        }

        Course::create($attributes);
        return redirect(route('courses.index.admin'))->with('success', 'Added!');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect(route('courses.index.admin'))->with('success', 'Course deleted!');
    }
}
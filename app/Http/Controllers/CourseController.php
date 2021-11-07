<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(User $user)
    {
        return view('courses.index', [
            'user' => $user,
            'courses' => Course::where('user_id', $user->id)->orderBy('finish_date', 'desc')->paginate(12)
        ]);
    }
    public function show(User $user, Course $course) {
        return view('courses.show', [
          'course' => $course,
          'user' => $user,
          'projects' => $course->projects,
        ]);
    }
}

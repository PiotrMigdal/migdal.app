<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(User $user)
    {
        return view('projects.index', [
            'user' => $user,
            'projects' => Project::where('user_id', $user->id)->orderBy('release_date', 'desc')->paginate(12)
        ]);
    }
    public function show(User $user, Project $project) {
        return view('projects.show', [
          'project' => $project,
          'user' => $user,
          'course' => $project->course,
        ]);
    }
}

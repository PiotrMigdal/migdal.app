<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(User $user)
    {
        return view('projects.index', [
            'user' => $user
        ]);
    }
    public function show(User $user, Project $project) {
        return view('projects.show', [
          'project' => $project,
          'user' => $user,
        ]);
    }
}

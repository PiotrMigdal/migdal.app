<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    public function index(User $user)
    {
        return view('jobs.index', [
            'user' => $user,
            'jobs' => Job::where('user_id', $user->id)->paginate(9)
        ]);
    }
    public function show(User $user, Job $job) {
        return view('jobs.show', [
          'job' => $job,
          'user' => $user,
        ]);
    }
}

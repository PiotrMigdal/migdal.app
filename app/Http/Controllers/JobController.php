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
        $user->jobs->map(function ($job) {
            $job['start_year'] = Carbon::createFromFormat('Y-m-d', $job->start_date)->format('Y');
            $job['finish_year'] = Carbon::createFromFormat('Y-m-d', $job->finish_date)->format('Y');
            return $job;
        });
        $user->courses->map(function ($course) {
            $course['finish_year'] = Carbon::createFromFormat('Y-m-d', $course->finish_date)->format('Y');
            return $course;
        });
        $user->projects->map(function ($project) {
            $project['finish_year'] = Carbon::createFromFormat('Y-m-d', $project->release_date)->format('Y');
            return $project;
        });
        return view('jobs.index', [
            'user' => $user,
            'jobs' => $user->jobs->sortByDesc('start_date'),
            'courses' => $user->courses->sortByDesc('finish_date'),
            'projects' => $user->projects->sortByDesc('release_date'),
            // 'start_date_year' => $user->jobs->groupBy(function($job){ return Carbon::createFromFormat('Y-m-d', $job->start_date)->format('Y'); }),
            // 'finish_date_year' => $user->jobs->groupBy(function($job){ return Carbon::createFromFormat('Y-m-d', $job->finish_date)->format('Y'); }),
            'min_year' => $user->jobs->min(function($job){ return Carbon::createFromFormat('Y-m-d', $job->start_date)->format('Y'); })

        ]);
    }
    public function show(User $user, Job $job) {
        return view('jobs.show', [
          'job' => $job,
          'user' => $user,
        ]);
    }
}

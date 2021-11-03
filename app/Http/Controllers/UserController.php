<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Course;
use App\Models\User;
use Carbon\Carbon;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index', [
            'users' => User::with('projects', 'courses')->paginate(15)
        ]);
    }

    public function show(User $user)
    {
        $jobs = $user->jobs->map(function ($job) {
            $start = Carbon::createFromFormat('Y-m-d', $job->start_date);
            $finish = $job->finish_date ? Carbon::createFromFormat('Y-m-d', $job->finish_date) : Carbon::now();
            $job['start_year'] = $start->format('Y');
            $job['finish_year'] = $finish->format('Y');
            $job['months'] = $start->diff($finish)->m;
            $job['years'] = $start->diff($finish)->y;
            $job['current'] = $job->finish_date ? '' : ' (current)';
            return $job;
        });

        $projects = $user->projects->map(function ($project) {
            $project['release_year'] = Carbon::createFromFormat('Y-m-d', $project->release_date)->format('Y');
            return $project;
        });

        $project_years = $projects->groupBy('release_year');

        return view('users.show', [
            'user' => $user,
            'courses' => Course::where('user_id', $user->id)->orderBy('finish_date', 'DESC')->limit(5)->get(),
            'abouts' => About::where('user_id', $user->id)->get(),
            'jobs' => $jobs->sortByDesc('start_date'),
            'max_projects' => $project_years->map->count()->max(),
            'project_years' => $project_years,
            'max_job_length' => $jobs->max('years') === 0 ? 1 : $jobs->max('years'),
        ]);
    }
}

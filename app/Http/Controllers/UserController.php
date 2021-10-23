<?php

namespace App\Http\Controllers;

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
        return view('users.show', [
            'user' => $user,
            'jobs' => $jobs->sortByDesc('start_date'),
            'max_length' => $jobs->max('years')
        ]);
    }
}

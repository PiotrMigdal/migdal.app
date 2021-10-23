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
        $jobs = $user->jobs->map(function ($job) {
            $job['start_year'] = Carbon::createFromFormat('Y-m-d', $job->start_date)->format('Y');
            $job['finish_year'] = $job->finish_date ? Carbon::createFromFormat('Y-m-d', $job->finish_date)->format('Y') : '';
            return $job;
        });

        // Union of courses and projects creates new collection - adds. This is used to sort both by release_date
        $courses = DB::table("courses")
            ->select("courses.id"
            ,"courses.name"
            ,"courses.finish_date"
            ,"courses.thumbnail",DB::raw('"course" AS "type"'))
            ->where('user_id', $user->id);
        $adds = DB::table("projects")
            ->select("projects.id"
            ,"projects.name"
            ,"projects.release_date"
            ,"projects.thumbnail",DB::raw('"project" AS "type"'))
            ->where('user_id', $user->id)
            ->unionAll($courses)
            ->get();

        $adds = $adds->map(function ($add) {
            $add->release_year = Carbon::createFromFormat('Y-m-d', $add->release_date)->format('Y');
            return $add;
        });
        return view('jobs.index', [
            'user' => $user,
            'jobs' => $jobs->sortByDesc('start_date'),
            'adds' => $adds->sortByDesc('release_date'),
            'min_year' => min([$jobs->min('start_year'), $adds->min('release_year')])
        ]);
    }
    public function show(User $user, Job $job) {
        return view('jobs.show', [
          'job' => $job,
          'user' => $user,
        ]);
    }
}

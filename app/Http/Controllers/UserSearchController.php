<?php

namespace App\Http\Controllers;

use App\Models\Search;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserSearchController extends Controller
{
    public function index(User $user, Request $request)
    {
        $search = request()->validate([
            'search' => 'min:3',
        ])['search'];

        $courses = DB::table("courses")
            ->select("courses.id"
            ,"courses.name"
            ,"courses.thumbnail"
            ,"courses.description"
            ,"courses.technologies",
            DB::raw('"courses" AS "type"'))
            ->where('user_id', '=', $user->id)
            ->where(fn ($query) =>
                $query->where('courses.name', 'like', '%' . $search . '%')
                        ->orWhere('courses.description', 'like', '%' . $search . '%')
                        ->orWhere('courses.technologies', 'like', '%' . $search . '%')
            );

        $about = DB::table("abouts")
            ->select("abouts.id"
            ,"abouts.title"
            ,"abouts.thumbnail"
            ,"abouts.excerpt"
            ,"abouts.body",
            DB::raw('"about" AS "type"'))
            ->where('user_id', '=', $user->id)
            ->where(fn ($query) =>
                $query->where('abouts.title', 'like', '%' . $search . '%')
                        ->orWhere('abouts.excerpt', 'like', '%' . $search . '%')
                        ->orWhere('abouts.body', 'like', '%' . $search . '%')
            );

        $jobs = DB::table("jobs")
            ->select("jobs.id"
            ,"jobs.job_title"
            ,"jobs.thumbnail"
            ,"jobs.description"
            ,"jobs.responsibilities",
            DB::raw('"jobs" AS "type"'))
            ->where('user_id', '=', $user->id)
            ->where(fn ($query) =>
                $query->where('jobs.job_title', 'like', '%' . $search . '%')
                        ->orWhere('jobs.description', 'like', '%' . $search . '%')
                        ->orWhere('jobs.responsibilities', 'like', '%' . $search . '%')
            );

        $results = DB::table("projects")
            ->select("projects.id"
            ,"projects.name"
            ,"projects.thumbnail"
            ,"projects.description"
            ,"projects.technologies",
            DB::raw('"projects" AS "type"'))
            ->where('user_id', '=', $user->id)
            ->where(fn ($query) =>
                $query->where('projects.name', 'like', '%' . $search . '%')
                        ->orWhere('projects.description', 'like', '%' . $search . '%')
                        ->orWhere('projects.technologies', 'like', '%' . $search . '%')
            )
            ->unionAll($courses)
            ->unionAll($about)
            ->unionAll($jobs)
            ->get();

            return view('user_search.index', [
                'user' => $user,
                'results' => $results,
            ]);
    }

}

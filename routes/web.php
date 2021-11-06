<?php

use App\Http\Controllers\AboutCommentController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminAboutController;
use App\Http\Controllers\AdminCourseController;
use App\Http\Controllers\AdminJobController;
use App\Http\Controllers\AdminProjectController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserSearchController;
use App\Models\About;
use App\Models\AboutComment;
use App\Models\Course;
use App\Models\Job;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Redirect to home page
Route::get('/', function () {
    return redirect('/users/PiotrMigdal');
})->name('home');


Route::middleware('auth')->group(function () {
    Route::get('users/{user:username}/search', [UserSearchController::class, 'index'])->name('user_search.index');

    Route::get('users', [UserController::class, 'index'])->name('user.index');
    Route::get('users/{user:username}', [UserController::class, 'show'])->name('user.show');

    Route::get('users/{user:username}/about', [AboutController::class, 'index'])->name('about.index');
    Route::get('users/{user:username}/about/{about}', [AboutController::class, 'show'])->name('about.show');

    Route::get('users/{user:username}/projects', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('users/{user:username}/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');

    Route::get('users/{user:username}/courses', [CourseController::class, 'index'])->name('courses.index');
    Route::get('users/{user:username}/courses/{course}', [CourseController::class, 'show'])->name('courses.show');

    Route::get('users/{user:username}/timeline', [TimelineController::class, 'index'])->name('timeline.index');

    Route::get('users/{user:username}/jobs', [JobController::class, 'index'])->name('jobs.index');
    Route::get('users/{user:username}/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');

    Route::post('comment/about/{about}', [AboutCommentController::class, 'store'])->name('about_comment.store');
    Route::delete('comment/about/{comment}', [AboutCommentController::class, 'destroy'])->name('about_comment.destroy');

    // ADMIN PANEL
    Route::get('admin/user', [AdminUserController::class, 'edit'])->name('user.edit');
    Route::patch('admin/user/{user}', [AdminUserController::class, 'update'])->name('user.update');

    Route::get('admin/about', [AdminAboutController::class, 'index'])->name('about.index.admin');
    Route::get('admin/about/{about}/edit', [AdminAboutController::class, 'edit'])->name('about.edit');
    Route::patch('admin/about/{about}', [AdminAboutController::class, 'update'])->name('about.update');
    Route::get('admin/about/create', [AdminAboutController::class, 'create'])->name('about.create');
    Route::post('admin/about', [AdminAboutController::class, 'store'])->name('about.store');
    Route::delete('admin/about/{about}', [AdminAboutController::class, 'destroy'])->name('about.destroy');


    Route::get('admin/projects', [AdminProjectController::class, 'index'])->name('projects.index.admin');
    Route::get('admin/projects/{project}/edit', [AdminProjectController::class, 'edit'])->name('projects.edit');
    Route::patch('admin/projects/{project}', [AdminProjectController::class, 'update'])->name('projects.update');
    Route::get('admin/projects/create', [AdminProjectController::class, 'create'])->name('projects.create');
    Route::post('admin/projects', [AdminProjectController::class, 'store'])->name('projects.store');
    Route::delete('admin/projects/{project}', [AdminProjectController::class, 'destroy'])->name('projects.destroy');


    Route::get('admin/courses', [AdminCourseController::class, 'index'])->name('courses.index.admin');
    Route::get('admin/courses/{course}/edit', [AdminCourseController::class, 'edit'])->name('courses.edit');
    Route::patch('admin/courses/{course}', [AdminCourseController::class, 'update'])->name('courses.update');
    Route::get('admin/courses/create', [AdminCourseController::class, 'create'])->name('courses.create');
    Route::post('admin/courses', [AdminCourseController::class, 'store'])->name('courses.store');
    Route::delete('admin/courses/{course}', [AdminCourseController::class, 'destroy'])->name('courses.destroy');

    Route::get('admin/jobs', [AdminJobController::class, 'index'])->name('jobs.index.admin');
    Route::get('admin/jobs/{job}/edit', [AdminJobController::class, 'edit'])->name('jobs.edit');
    Route::patch('admin/jobs/{job}', [AdminJobController::class, 'update'])->name('jobs.update');
    Route::get('admin/jobs/create', [AdminJobController::class, 'create'])->name('jobs.create');
    Route::post('admin/jobs', [AdminJobController::class, 'store'])->name('jobs.store');
    Route::delete('admin/jobs/{job}', [AdminJobController::class, 'destroy'])->name('jobs.destroy');

});

// Route::get('/all', function () {
//     $About = '<p>About</p>' . About::where('user_id', Auth::user()->id)->get();
//     $User = '<p>User</p>' . User::where('id', Auth::user()->id)->get();
//     $Job = '<p>Job</p>' . Job::where('user_id', Auth::user()->id)->get();
//     $Course = '<p>Course</p>' . Course::where('user_id', Auth::user()->id)->get();
//     $Project = '<p>Project</p>' . Project::where('user_id', Auth::user()->id)->get();
//     return $About . $User . $Job . $Course . $Project;
// })->middleware(['auth'])->name('all');

require __DIR__.'/auth.php';

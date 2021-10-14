<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminAboutController;
use App\Http\Controllers\AdminCourseController;
use App\Http\Controllers\AdminProjectController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use App\Models\About;
use App\Models\User;
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
    Route::get('users/{user:username}', [UserController::class, 'show'])->name('user.show');
    Route::get('users/{user:username}/about', [AboutController::class, 'index'])->name('about.index');
    Route::get('users/{user:username}/about/{about}', [AboutController::class, 'show'])->name('about.show');

    Route::get('users/{user:username}/projects', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('users/{user:username}/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');

    Route::get('users/{user:username}/courses', [CourseController::class, 'index'])->name('courses.index');
    Route::get('users/{user:username}/courses/{course}', [CourseController::class, 'show'])->name('courses.show');

    // ADMIN PANEL
    Route::get('admin/user', [AdminUserController::class, 'edit'])->name('user.edit');
    Route::patch('admin/user/{user}', [AdminUserController::class, 'update'])->name('user.update');

    Route::get('admin/about', [AdminAboutController::class, 'index'])->name('about.index.admin');
    Route::get('admin/about/{about}/edit', [AdminAboutController::class, 'edit'])->name('about.edit');
    Route::get('admin/about/{about}/edit', [AdminAboutController::class, 'edit'])->name('about.edit');
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

    Route::get('users/piotrmigdal/jobs', [JobController::class, 'index'])->name('jobs.index');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

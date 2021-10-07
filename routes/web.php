<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminAboutController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TimelineController;
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




    // ADMIN PANEL
    Route::get('admin/user', [AdminUserController::class, 'edit'])->name('user.edit');
    Route::patch('admin/user/{user}', [AdminUserController::class, 'update'])->name('user.update');
    Route::get('admin/about', [AdminAboutController::class, 'index'])->name('about.index.admin');
    Route::get('admin/about/{about}/edit', [AdminAboutController::class, 'edit'])->name('about.edit');
    Route::get('admin/about/{about}/edit', [AdminAboutController::class, 'edit'])->name('about.edit');
    Route::get('admin/about/create', [AdminAboutController::class, 'create'])->name('about.create');
    Route::post('admin/about', [AdminAboutController::class, 'store'])->name('about.store');
    Route::delete('admin/about/{about}', [AdminAboutController::class, 'destroy'])->name('about.destroy');





    // Route::get('admin/posts/create', [AdminPostController::class, 'create']);
    // Route::get('admin/posts', [AdminPostController::class, 'index']);
    // Route::get('admin/posts/{post}/edit', [AdminPostController::class, 'edit']);
    // Route::patch('admin/posts/{post}', [AdminPostController::class, 'update']);
    // Route::delete('admin/posts/{post}', [AdminPostController::class, 'destroy']);

    Route::get('users/timeline', [TimelineController::class, 'index'])->name('timeline');
    Route::get('users/projects', [ProjectController::class, 'index'])->name('projects');
    Route::get('users/courses', [CourseController::class, 'index'])->name('courses');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

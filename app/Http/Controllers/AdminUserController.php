<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminUserController extends Controller
{
    public function index()
    {
        return view('admin.user.index');
    }
    public function update(User $user) {
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => ['required|max:255', Rule::unique('user', 'username')->ignore($user->id)],
            'email' => 'required|max:255|email|unique:users,email',
            'thumbnail' => 'image',
            'age',
            'education',
            'main_job',
            'additional_job',
            'about_me_title',
            'about_me_body'
        ]);
        $user->update($attributes);
        return back()->with('success', 'Post updated!');
    }
}

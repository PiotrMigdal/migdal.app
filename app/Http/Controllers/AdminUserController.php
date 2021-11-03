<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class AdminUserController extends Controller
{
    public function edit()
    {
        return view('admin.user.edit');
    }
    public function update(User $user)
    {
        if($user->id === auth()->id()) {
            $attributes = request()->validate([
                'name' => 'required|max:255',
                'username' => ['required', Rule::unique('users', 'username')->ignore($user->id)],
                'email' => ['required', 'max:255', 'email', Rule::unique('users', 'email')->ignore($user->id)],
                'thumbnail' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240|nullable',
                'age' => 'max:255',
                'education' => 'max:255',
                'main_job' => 'max:255',
                'additional_job' => 'max:255'
            ]);
            if(isset($attributes['thumbnail'])) {
                $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
            }
            $user->update($attributes);
            return back()->with('success', 'Profile upated!');
        } else {
            abort(403);
        }
    }
}

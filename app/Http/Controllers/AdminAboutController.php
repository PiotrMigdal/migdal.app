<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminAboutController extends Controller
{
    public function index()
    {
        return view('admin.about.index');
    }
    public function edit(About $about)
    {
        return view('admin.about.edit', [
            'about' => $about,
        ]);
    }
    public function update(About $about)
    {
        $attributes = request()->validate([
            'title' => 'required|max:255',
            'excerpt' => 'required',
            'body' => 'required',
            'thumbnail' => 'image',
        ]);
        if(isset($attributes['thumbnail'])) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }
        $about->update($attributes);
        return back()->with('success', 'Saved!');
    }
}

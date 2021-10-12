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
    public function create()
    {
        return view('admin.about.create');
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
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if(isset($attributes['thumbnail'])) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }
        $about->update($attributes);
        return back()->with('success', 'Saved!');
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required|max:255',
            'excerpt' => 'required',
            'body' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        About::create($attributes);
        return redirect(route('about.index.admin'))->with('success', 'Added!');
    }

    public function destroy(About $about)
    {
        $about->delete();
        return back()->with('success', 'Article deleted!');
    }
}

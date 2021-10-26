<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutCommentController extends Controller
{
    public function store(About $about)
    {
        request()->validate([
            'body' => 'required'
        ]);

        $about->comments()->create([
            'user_id' => request()->user()->id,
            'body' => request('body')
        ]);

        return back();
    }

    public function destroy(AboutCommentController $comment)
    {
        $comment->delete();
        return back()->with('success', 'Comment deleted!');
    }
}

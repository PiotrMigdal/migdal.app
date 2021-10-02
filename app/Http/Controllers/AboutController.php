<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\User;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(User $user)
    {
        return view('about.index', [
            'user' => $user
        ]);
    }

    public function show(User $user, About $about) {
        return view('about.show', [
          'about' => $about,
          'user' => $user,
        ]);
    }

}

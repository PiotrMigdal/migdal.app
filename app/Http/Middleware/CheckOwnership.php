<?php

namespace App\Http\Middleware;

use App\Models\About;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckOwnership
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $aboutId = $this->route('about');

        return About::where('id', $aboutId)
                    ->where('user_id', Auth::id())->exists();
    }
}

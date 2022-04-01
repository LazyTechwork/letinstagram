<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PostController extends Controller
{
    public function create(): View
    {
        return view('posts.create');
    }
}

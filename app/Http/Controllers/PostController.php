<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::latest()->paginate(20);
        return \view('home', compact('posts'));
    }
    public function create(): View
    {
        return view('posts.create');
    }
}

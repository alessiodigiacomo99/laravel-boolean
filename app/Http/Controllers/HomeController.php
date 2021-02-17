<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function blog(Post $post)
    {
        $posts = $post->all();
        return view('blog', compact('posts'));
    }
}

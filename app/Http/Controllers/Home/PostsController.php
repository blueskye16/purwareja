<?php

namespace App\Http\Controllers\Home;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Illuminate\Routing\Controller;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts', [
            'posts' => Post::filter(request(['search', 'category']))->latest()->paginate(12)->withQueryString()
        ]);
    }
}

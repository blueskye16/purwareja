<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
// use Illuminate\Routing\Controller;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts', [
            'title' => 'Artikel Desa Purwareja',
            'posts' => Post::filter(request(['search', 'category']))->latest()->paginate(12)->withQueryString()
        ]);
    }
}

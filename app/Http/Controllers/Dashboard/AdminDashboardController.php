<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminDashboardController extends Controller
{

    // public function index()
    // {
    //   $posts = Post::all();
    //   $categories = Category::all();

    //   return view('dashboard.index', [
    //     'posts' => $posts,
    //     'categories' => $categories,
    //   ]);
    // }

  public function index()
    {
        $posts = Post::all();
        $lastPost = Post::latest()->first(); // get the latest post
        // $categories = Category::all();
        $categories = Category::withCount('posts')->get();

        return view('dashboard.index', [
            'posts' => $posts,
            'categories' => $categories,
            // 'category' => $categories,
            'countAllPosts' => $posts->count(), // pass the count of posts
            'lastPostTitle' => $lastPost->title, // pass the title of the latest post

        ]);
    } 
}

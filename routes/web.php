<?php

use App\Models\Post;
use App\Models\Admin;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/posts', function () {
    $posts = Post::latest()->get();
    return view('posts', [
        'title' => 'Artikel',
        'posts' => $posts
    ]);
});

Route::get('/post/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts', ['title' => count($category->posts) . ' Article in' . $category->name, 'posts' => $category->posts
//     ]);
// });

Route::get('/categories/{category:slug}', function (Category $category) {
    // $posts = $category->posts->load( 'author', 'category');

    return view('posts', ['title' => 'something', 'posts' => $category->posts]);
});

// Route::get('/admin', function (Admin $admin) {
//     return view('posts', ['title' => count($admin->posts) . ' Article by' . $admin->name, 'posts' => $admin->posts
//     ]);
// });

// view buat kumpulan artikel & view login admin
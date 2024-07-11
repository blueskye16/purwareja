<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Artikel Desa Purwareja',
        'posts' => Post::filter(request(['search', 'category']))->latest()->paginate(9)->withQueryString()
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', ['title' => count($category->posts) . ' Article in ' . $category->name , 'posts' => $category->posts]);
});
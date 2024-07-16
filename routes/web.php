<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\DashboardController;

//dashboard
Route::get('/',[DashboardController::class, 'index']);

//posts
Route::get('/posts',[PostsController::class, 'index']);

//login
Route::get('/admin',[LoginController::class, 'index']);
Route::post('/admin',[LoginController::class, 'store']);



//login
Route::get('/admin', function(){
    return view('login.login');
});


Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', ['title' => count($category->posts) . ' Article in ' . $category->name , 'posts' => $category->posts]);
});

Route::get('/admin-dashboard', function () {
    return view('admin-dashboard');
});
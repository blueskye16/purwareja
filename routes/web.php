<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\LogoutController;

//dashboard
Route::get('/',[DashboardController::class, 'index']);

//posts
Route::get('/posts',[PostsController::class, 'index']);
Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', ['title' => count($category->posts) . ' Article in ' . $category->name , 'posts' => $category->posts]);
});

//login
Route::get('/admin',[LoginController::class, 'index'])->name('login')->middleware('guest');
// Route::post('/admin',[LoginController::class, 'store']);
Route::post('/admin',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout'])->name('logout')->middleware('auth');

// Route::post('/logout', LogoutController::class)->name('logout')->middleware('auth');

//admin-dashboard
Route::get('/admin-dashboard',[AdminDashboardController::class, 'index'])->middleware('auth');

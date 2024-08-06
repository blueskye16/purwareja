<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;

//home
route::get('/', [HomeController::class, 'index'])->name('home');

//posts
Route::get('/posts', [PostsController::class, 'index']);
Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', ['title' => count($category->posts) . ' Article in ' . $category->name, 'posts' => $category->posts]);
});

//login
Route::get('/admin', [LoginController::class, 'index'])->name('login')->middleware('guest');
// Route::post('/admin',[LoginController::class, 'store']);
Route::post('/admin', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

//admin-dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => 'Admin Dashboard'
    ]);
})->name('dashboard')->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

// category authorization
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

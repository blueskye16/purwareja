<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/pemerintahan', function () {
    return view('dashboard');
});

Route::get('/potensi', function () {
    return view('dashboard');
});

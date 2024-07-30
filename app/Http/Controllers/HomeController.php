<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index()
    {
        // dd(Auth::check());
        return view('home', [
            'title' => 'Konten Terbaru',
            'posts' => Post::latest()->paginate(6)->withQueryString()
        ]);
    }
}

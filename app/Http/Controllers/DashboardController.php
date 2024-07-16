<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'title' => 'Konten Terbaru',
            'posts' => Post::latest()->paginate(6)->withQueryString()
        ]);
    }
}

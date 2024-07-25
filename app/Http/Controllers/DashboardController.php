<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // dd(Auth::check());
        return view('dashboard', [
            'title' => 'Konten Terbaru',
            'posts' => Post::latest()->paginate(6)->withQueryString()
        ]);
    }
}

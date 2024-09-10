<?php

namespace App\Http\Controllers\Home;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Repositories\PostRepository

class HomeController extends Controller
{
    public function index()
    {
        $featuredPosts = Post::where('is_featured', true)->take(3)->get();

        return view('home', [
            // 'title' => 'Konten Terbaru',
            'posts' => Post::latest()->paginate(9)->withQueryString(),
            'featuredPosts' => $featuredPosts,
        ]);
    }

    // ini niat tadinya mau dibikin buat controller component(posts) tapi malah engga bisa di paginate

    // public function index(PostRepository $postRepository)
    // {
    //     try {
    //         $posts = $postRepository->getLatestPosts(6);
    //     } catch (\Exception $e) {
    //         dd($e->getMessage());
    //     }

    //     // $posts = $postRepository->getLatestPosts(6);
    //     $featuredPosts = $postRepository->getFeaturedPosts();

    //     return view('home', [
    //         'posts' => $posts,
    //         'featuredPosts' => $featuredPosts,
    //     ]);
    // }
}

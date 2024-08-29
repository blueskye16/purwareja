<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AdminFeaturedPostsController extends Controller
{
    public function index() {
        $posts = Post::filter(request(['search', 'category']))->latest()->paginate(12)->withQueryString();
        
        // $posts = $posts->sortByDesc('updated_at');
        // kalo dipakein ini jadi error?


        $featuredPosts = Post::where('is_featured', true)->take(3)->get();
        
        return view('dashboard.featured-posts.index', [
            'posts' => $posts,
            'featuredPosts' => $featuredPosts
        ]);
    }

    public function pin(Post $post) {
        $post->is_featured = !$post->is_featured;
        $post->save();

        return redirect()->route('featured')->with('success', 'Artikel berhasil di sematkan!');
    }

    public function unpin(Post $post) {
        $post->is_featured = false;
        $post->save();


        return back()->with('success', 'Post has been unpinned!');
    }
}

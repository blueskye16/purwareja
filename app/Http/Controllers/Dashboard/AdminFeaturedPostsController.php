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
        return view('dashboard.featured-posts.index', [
            'posts' => $posts
        ]);
    }
    public function pin(Post $post) {
        $post->featured = true;
        $post->save();

        return redirect()->back()->with('success', 'Artikel berhasil di sematkan!');
    }
}

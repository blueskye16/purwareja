<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepository
{
  public function getLatestPosts($limit = 6)
  {
    return Post::latest()->paginate($limit)->withQueryString();
  }

  public function getFeaturedPosts($limit = 3)
  {
    return Post::where('is_featured', true)->take($limit)->get();
  }
}


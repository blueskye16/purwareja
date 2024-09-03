<?php

namespace App\View\Components\home;

use Closure;
use App\Models\Post;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;

class posts extends Component
{
    /**
     * Create a new component instance.
     */

    public $posts, $title;

    public function __construct()
    {
        $this->posts = Post::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.posts');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    // protected $with = ['category', 'admin'];

    protected $fillable = ['title', 'admin', 'slug', 'body'];

    public function admin(): BelongsTo
    {
        return $this->BelongsTo(Admin::class);
    }

    public function category(): BelongsTo
    {
        return $this->BelongsTo(Category::class);
    }
}

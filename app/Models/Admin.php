<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Admin extends Model
{
    use HasFactory;

    // protected $fillable = ['name', 'email', 'password'];

    protected $guarded = ['id'];

    public function posts(): HasMany
    {
        return $this->HasMany(Post::class);
    }
}

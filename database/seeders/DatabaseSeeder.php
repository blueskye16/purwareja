<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Admin;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    $this->call([CategorySeeder::class, AdminSeeder::class]);

    Post::factory(50)->recycle([
        Category::all(),
        Admin::all()
    ])->create();
    }
}

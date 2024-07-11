<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Pemerintahan',
            'slug' => 'pemerintahan',
            'color' => 'yellow'
        ]);

        Category::create([
            'name' => 'Penduduk',
            'slug' => 'penduduk',
            'color' => 'blue'
        ]);

        Category::create([
            'name' => 'Desa Sehat',
            'slug' => 'desa-sehat',
            'color' => 'green'
        ]);
    }
}

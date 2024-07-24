<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'kevin',
            'email'=> 'kevin@gmail.com',
            'password'=> bcrypt('laptop'),
        ]);

        // 'password' => Hash::make('password'),


        User::factory(4)->create();
    }
}

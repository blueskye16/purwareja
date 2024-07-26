<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{

    protected static ? string $password;

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

        User::create([
            'name' => 'mira',
            'email'=> 'mira@gmail.com',
            'password' => static::$password ??= Hash::make('password'),
        ]);



        // 'password' => Hash::make('password'),


        User::factory(3)->create();
    }
}

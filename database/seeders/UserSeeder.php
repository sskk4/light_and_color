<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use App\models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'John',
            'email' => 'john@example.com',
            'password' => Hash::make('johnny'),
        ]);

        User::create([
            'name' => 'Young',
            'email' => 'young@example.com',
            'password' => Hash::make('123456'),
        ]);

        User::create([
            'name' => 'Matthew',
            'email' => 'mati@example.com',
            'password' => Hash::make('123456'),
        ]);

        User::create([
            'name' => 'Sebastian',
            'email' => 'sebastian@example.com',
            'password' => Hash::make('123456'),
        ]);

        User::create([
            'name' => 'Lucas',
            'email' => 'lucas@example.com',
            'password' => Hash::make('123456'),
        ]);

        User::create([
            'name' => 'Pollock',
            'email' => 'pollock@example.com',
            'password' => Hash::make('123456'),
        ]);

    }
}

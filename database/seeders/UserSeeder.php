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
            'password' => Hash::make('password'),
        ]);
    }
}

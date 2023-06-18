<?php

namespace Database\Seeders;

use App\Models\Rated;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RatedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rated::create([
            'user_id' => 5,
            'product_id' => 5,
        ]);

        Rated::create([
            'user_id' => 5,
            'product_id' => 12,
        ]);

        Rated::create([
            'user_id' => 2,
            'product_id' => 15,
        ]);

        Rated::create([
            'user_id' => 3,
            'product_id' => 5,
        ]);

        Rated::create([
            'user_id' => 2,
            'product_id' => 5,
        ]);

        Rated::create([
            'user_id' => 1,
            'product_id' => 3,
        ]);

        Rated::create([
            'user_id' => 1,
            'product_id' => 2,
        ]);

        Rated::create([
            'user_id' => 1,
            'product_id' => 1,
        ]);

        Rated::create([
            'user_id' => 1,
            'product_id' => 5,
        ]);

        Rated::create([
            'user_id' => 5,
            'product_id' => 4,
        ]);

        Rated::create([
            'user_id' => 3,
            'product_id' => 2,
        ]);
    }
}

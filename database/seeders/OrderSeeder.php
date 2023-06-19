<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::create([
            'user_id' => 1,
            'product_id' => 4,
        ]);

        Order::create([
            'user_id' => 3,
            'product_id' => 8,
        ]);

        Order::create([
            'user_id' => 3,
            'product_id' => 9,
        ]);

        Order::create([
            'user_id' => 1,
            'product_id' => 14,
        ]);
        Order::create([
            'user_id' => 2,
            'product_id' => 17,
        ]);

        Order::create([
            'user_id' => 6,
            'product_id' => 20,
        ]);

        Order::create([
            'user_id' => 4,
            'product_id' => 21,
        ]);
    }
}

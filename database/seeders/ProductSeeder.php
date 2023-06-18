<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'user_id' => 1,
            'title' => 'Rzeka',
            'description' => 'Płótno, olej, 35cmx50cm',
            'price' => 100,
            'image' => 'product.jpg',
            'sold' => false,
            'approved' => true,
        ]);

        Product::create([
            'user_id' => 1,
            'title' => 'Leszy',
            'description' => 'Płótno, akryl, 35 x 50 cm',
            'price' => 100,
            'image' => 'product5.jpg',
            'sold' => 0,
            'approved' => true,
        ]);

        Product::create([
            'user_id' => 2,
            'title' => 'Clouds',
            'description' => 'Canvas, acril, 35 x 50 cm',
            'price' => 25,
            'image' => 'product (1).jpg',
            'sold' => 0,
            'approved' => true,
        ]);

        Product::create([
            'user_id' => 2,
            'title' => 'Mountains',
            'description' => 'Płótno, akryl, 35 x 50 cm',
            'price' => 89,
            'image' => 'product (2).jpg',
            'sold' => 1,
            'approved' => true,
        ]);

        Product::create([
            'user_id' => 1,
            'title' => 'Palms',
            'description' => 'Płótno, akryl, 35 x 50 cm',
            'price' => 100,
            'image' => 'product (3).jpg',
            'sold' => 0,
            'approved' => true,
        ]);

        Product::create([
            'user_id' => 3,
            'title' => 'House',
            'description' => 'Płótno, akryl, 35 x 50 cm',
            'price' => 70,
            'image' => 'product (4).jpg',
            'sold' => 0,
            'approved' => true,
        ]);

        Product::create([
            'user_id' => 5,
            'title' => 'Church',
            'description' => 'Płótno, akryl, 35 x 50 cm',
            'price' => 1000,
            'image' => 'product (5).jpg',
            'sold' => 0,
            'approved' => true,
        ]);

        Product::create([
            'user_id' => 4,
            'title' => 'Valley',
            'description' => 'Płótno, akryl, 35 x 50 cm',
            'price' => 50,
            'image' => 'product (6).jpg',
            'sold' => 1,
            'approved' => true,
        ]);

        Product::create([
            'user_id' => 3,
            'title' => 'The river',
            'description' => 'Płótno, akryl, 35 x 50 cm',
            'price' => 50,
            'image' => 'product (7).jpg',
            'sold' => 1,
            'approved' => true,
        ]);

        Product::create([
            'user_id' => 2,
            'title' => 'Mountains',
            'description' => 'Płótno, akryl, 35 x 50 cm',
            'price' => 50,
            'image' => 'product (8).jpg',
            'sold' => 0,
            'approved' => true,
        ]);

        Product::create([
            'user_id' => 2,
            'title' => 'Mountains',
            'description' => 'Płótno, akryl, 35 x 50 cm',
            'price' => 50,
            'image' => 'product (9).jpg',
            'sold' => 0,
            'approved' => true,
        ]);

        Product::create([
            'user_id' => 2,
            'title' => 'Mountains',
            'description' => 'Płótno, akryl, 35 x 50 cm',
            'price' => 50,
            'image' => 'product (10).jpg',
            'sold' => 0,
            'approved' => true,
        ]);

        Product::create([
            'user_id' => 4,
            'title' => 'Flowers',
            'description' => 'Płótno, akryl, 35 x 50 cm',
            'price' => 150,
            'image' => 'product (11).jpg',
            'sold' => 0,
            'approved' => true,
        ]);

        Product::create([
            'user_id' => 4,
            'title' => 'Flowers',
            'description' => 'Płótno, akryl, 35 x 50 cm',
            'price' => 150,
            'image' => 'product (12).jpg',
            'sold' => 1,
            'approved' => true,
        ]);

        Product::create([
            'user_id' => 1,
            'title' => 'Human',
            'description' => 'Płótno, akryl, 35 x 50 cm',
            'price' => 50,
            'image' => 'product (13).jpg',
            'sold' => 0,
            'approved' => true,
        ]);

        Product::create([
            'user_id' => 4,
            'title' => 'Flowers',
            'description' => 'Płótno, akryl, 35 x 50 cm',
            'price' => 150,
            'image' => 'product (14).jpg',
            'sold' => 0,
            'approved' => true,
        ]);

        Product::create([
            'user_id' => 4,
            'title' => 'Flowers',
            'description' => 'Płótno, akryl, 35 x 50 cm',
            'price' => 150,
            'image' => 'product (16).jpg',
            'sold' => 1,
            'approved' => true,
        ]);

        Product::create([
            'user_id' => 3,
            'title' => 'The ship',
            'description' => 'Płótno, akryl, 35 x 50 cm',
            'price' => 150,
            'image' => 'product (14).jpg',
            'sold' => 0,
            'approved' => true,
        ]);

        Product::create([
            'user_id' => 5,
            'title' => 'Abstract',
            'description' => 'Płótno, akryl, 35 x 50 cm',
            'price' => 250,
            'image' => 'product (17).jpg',
            'sold' => 0,
            'approved' => true,
        ]);

        Product::create([
            'user_id' => 5,
            'title' => 'Abstract',
            'description' => 'Płótno, akryl, 35 x 50 cm',
            'price' => 300,
            'image' => 'product (18).jpg',
            'sold' => 1,
            'approved' => true,
        ]);

        Product::create([
            'user_id' => 2,
            'title' => 'Birds',
            'description' => 'Płótno, akryl, 35 x 50 cm',
            'price' => 50,
            'image' => 'product (19).jpg',
            'sold' => 1,
            'approved' => true,
        ]);
    }
}

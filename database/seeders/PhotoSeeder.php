<?php

namespace Database\Seeders;

use App\Models\Photo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Photo::create([
            'user_id' => 1,
            'title' => 'Rzeka',
            'description' => 'Płótno, olej, 35cmx50cm',
            'price' => 100,
            'image' => 'product.jpg',
            'sold' => false,
            'approved' => true,
        ]);

        Photo::create([
            'user_id' => 1,
            'title' => 'Leszy',
            'description' => 'Płótno, akryl, 35 x 50 cm',
            'price' => 100,
            'image' => 'product5.jpg',
            'sold' => false,
            'approved' => true,
        ]);


}
}


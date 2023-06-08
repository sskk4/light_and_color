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
            'title' => 'Przykładowy tytuł',
            'description' => 'Przykładowy opis',
            'price' => 9.99,
            'image' => 'przykladowy_obraz.jpg',
            'sold' => false,
            'approved' => true,
        ]);

        Photo::create([
            'user_id' => 1,
            'title' => 'Przykładowy tytuł',
            'description' => 'Przykładowy opis',
            'price' => 9.99,
            'image' => 'przykladowy_obraz.jpg',
            'sold' => false,
            'approved' => true,
        ]);


}
}


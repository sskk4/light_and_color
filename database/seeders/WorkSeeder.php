<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Work;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Work::create([
            'image_style' => "I'm looking for an artist to create an abstract oil painting with expressive colors and dynamic movement.",
            'canvas_quality' => 1,
            'paint_quality' => 2,
            'painting_time' => 10,
            'price' => 200,
            'user_id' => 1,
            'accepted' => 0,
        ]);

        Work::create([
            'image_style' => "I need a realistic portrait of my beloved dog, capturing his expressive eyes and distinctive features.",
            'canvas_quality' => 1,
            'paint_quality' => 1,
            'painting_time' => 10,
            'price' => 200,
            'user_id' => 1,
            'accepted' => 0,
        ]);

        Work::create([
            'image_style' => "I'm seeking an artist to create a collage using different materials, including magazines, newspapers, and fabric scraps, to form a unique composition.",
            'canvas_quality' => 0,
            'paint_quality' => 0,
            'painting_time' => 10,
            'price' => 30,
            'user_id' => 2,
            'accepted' => 0,
        ]);

        Work::create([
            'image_style' => "I'm looking for an artist to create an abstract oil painting with expressive colors and dynamic movement.",
            'canvas_quality' => 2,
            'paint_quality' => 2,
            'painting_time' => 10,
            'price' => 200,
            'user_id' => 3,
            'accepted' => 0,
        ]);

        Work::create([
            'image_style' => "I'm commissioning a painting of a mountain landscape, capturing the serene beauty and majestic peaks.",
            'canvas_quality' => 1,
            'paint_quality' => 0,
            'painting_time' => 10,
            'price' => 200,
            'user_id' => 1,
            'accepted' => 0,
        ]);

        Work::create([
            'image_style' => "I'm interested in a contemporary artwork that combines bold geometric shapes and vibrant colors to create a visually striking composition.",
            'canvas_quality' => 1,
            'paint_quality' => 0,
            'painting_time' => 10,
            'price' => 200,
            'user_id' => 2,
            'accepted' => 0,
        ]);

        Work::create([
            'image_style' => "I'd like a still life painting of a bouquet of flowers, capturing their delicate petals and vibrant hues.",
            'canvas_quality' => 1,
            'paint_quality' => 0,
            'painting_time' => 10,
            'price' => 200,
            'user_id' => 3,
            'accepted' => 0,
        ]);

        Work::create([
            'image_style' => "I'm looking for an artist to create a surrealistic artwork that blurs the line between reality and imagination.",
            'canvas_quality' => 1,
            'paint_quality' => 0,
            'painting_time' => 10,
            'price' => 30,
            'user_id' => 1,
            'accepted' => 0,
        ]);

        Work::create([
            'image_style' => "I'm interested in a series of small, minimalist paintings that explore the concept of balance and harmony.",
            'canvas_quality' => 2,
            'paint_quality' => 2,
            'painting_time' => 30,
            'price' => 200,
            'user_id' => 2,
            'accepted' => 0,
        ]);

        Work::create([
            'image_style' => "I'd like a traditional watercolor painting depicting a tranquil seaside scene with crashing waves and a picturesque lighthouse.",
            'canvas_quality' => 1,
            'paint_quality' => 2,
            'painting_time' => 10,
            'price' => 50,
            'user_id' => 3,
            'accepted' => 0,
        ]);

        Work::create([
            'image_style' => "I'm commissioning a large-scale mural for a public space, showcasing local culture and celebrating diversity.",
            'canvas_quality' => 1,
            'paint_quality' => 2,
            'painting_time' => 50,
            'price' => 100,
            'user_id' => 1,
            'accepted' => 0,
        ]);

        Work::create([
            'image_style' => "I'd like a traditional watercolor painting depicting a tranquil seaside scene with crashing waves and a picturesque lighthouse.",
            'canvas_quality' => 1,
            'paint_quality' => 2,
            'painting_time' => 50,
            'price' => 100,
            'user_id' => 1,
            'accepted' => 1,
        ]);
        Work::create([
            'image_style' => "I'm commissioning a large-scale mural for a public space, showcasing local culture and celebrating diversity.",
            'canvas_quality' => 1,
            'paint_quality' => 2,
            'painting_time' => 50,
            'price' => 100,
            'user_id' => 1,
            'accepted' => 1,
        ]);
        Work::create([
            'image_style' => "I'm interested in a series of small, minimalist paintings that explore the concept of balance and harmony",
            'canvas_quality' => 1,
            'paint_quality' => 2,
            'painting_time' => 50,
            'price' => 100,
            'user_id' => 1,
            'accepted' => 1,
        ]);

    }
}

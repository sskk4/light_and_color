<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ImageSeeder extends Seeder
{
    public function run()
    {
        $sourceDirectory = public_path('img');
        $destinationDirectory = storage_path('app/public/images');

        $files = glob($sourceDirectory . '/*');

        foreach ($files as $file) {
            $fileName = basename($file);
            $destinationPath = $destinationDirectory . '/' . $fileName;

            rename($file, $destinationPath);
        }
    }
}

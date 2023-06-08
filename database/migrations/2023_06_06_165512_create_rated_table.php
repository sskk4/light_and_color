<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rated', function (Blueprint $table) {
            $table->id('id_rated');
            $table->foreignId('id_user')->constrained('users', 'id_user');
            $table->foreignId('id_photo')->constrained('photos', 'id_photo');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rated');
    }
};
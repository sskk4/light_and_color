<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rated extends Model
{
    use HasFactory;

    protected $table = 'rated';
    public $timestamps = false;

    protected $fillable = ['user_id', 'product_id'];
}

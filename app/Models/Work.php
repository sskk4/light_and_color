<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_style',
        'canvas_quality',
        'paint_quality',
        'painting_time',
        'price',
        'user_id',
        'receiver_user_id',
        'accepted',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function receiverUser()
    {
        return $this->belongsTo(User::class, 'receiver_user_id');
    }

}

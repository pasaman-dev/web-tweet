<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    // fillable to table
    protected $fillable = [
        'user_id',
        'image_name',
        'content'
    ];
}

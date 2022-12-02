<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'slug',
        'url',
        'cover_image',
        'read_time_in_minutes',
        'published_timestamp',
        'comment_count',
    ];

    protected $casts = [
        'published_timestamp' => 'datetime',
    ];
}
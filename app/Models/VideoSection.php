<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoSection extends Model
{
    use HasFactory;
    protected $fillable = [
        'thumb_image',
        'video_url',
        'title',
        'description',
        'stat1_icon',
        'stat1_number',
        'stat1_text',
        'stat2_icon',
        'stat2_number',
        'stat2_text',
        'button_url',
        'button_text',
    ];
}

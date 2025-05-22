<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
    'image', 'icon', 'experience_years', 'experience_text', 'headline', 'sub_headline', 'description','button_text',
    'button_link',
];
}

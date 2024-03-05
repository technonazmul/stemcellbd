<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\BlogCategory;

class Blog extends Model
{
    use HasFactory;
    function user() {
        return $this->belongsTo(User::class);
    }
    function blog_category(){
        return $this->belongsTo(BlogCategory::class,"blog_category_id");
    }
}

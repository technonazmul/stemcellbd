<?php

namespace App\Models;
use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    function blog_post(){
        return $this->belongsTo(Blog::class,"blog_post_id");
    }
}
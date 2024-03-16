<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\BlogCategory;
use App\Models\Doctor;

class Blog extends Model
{
    use HasFactory;
    function user() {
        return $this->belongsTo(User::class);
    }
    function blog_category(){
        return $this->belongsTo(BlogCategory::class,"blog_category_id");
    }
    function blog_post_user(){
        return $this->belongsTo(Doctor::class,"user_id");
    }
}

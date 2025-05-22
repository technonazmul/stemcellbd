<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'image', // add other fields you want to mass-assign
    ];
}

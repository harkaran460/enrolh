<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'user_type', 'college_logo', 'college_name', 'college_images', 'college_country', 'college_address', 'college_about_details', 'map_location', 'map_streetview', 'created_at', 'updated_at'
    ];
}

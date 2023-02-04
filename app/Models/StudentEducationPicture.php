<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentEducationPicture extends Model
{

    protected $table = 'student_education_pictures';

    protected $fillable = [
        'student_id', 'name', 'url',
    ];

    protected $dates = [
        'created_at', 'updated_at',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentWorkExperiencePicture extends Model
{

    protected $table = 'student_work_experience_pictures';

    protected $fillable = [
        'student_id', 'name', 'url',
    ];

    protected $dates = [
        'created_at', 'updated_at',
    ];
}

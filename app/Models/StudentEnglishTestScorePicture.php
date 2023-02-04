<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentEnglishTestScorePicture extends Model
{

    protected $table = 'student_english_test_score_pictures';

    protected $fillable = [
        'student_id', 'name', 'url',
    ];

    protected $dates = [
        'created_at', 'updated_at',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentPassportAndTravelHistoryPicture extends Model
{

    protected $table = 'student_passport_and_travel_history_pictures';

    protected $fillable = [
        'student_id', 'name', 'url',
    ];

    protected $dates = [
        'created_at', 'updated_at',
    ];
}

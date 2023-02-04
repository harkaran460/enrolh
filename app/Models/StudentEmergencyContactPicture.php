<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentEmergencyContactPicture extends Model
{

    protected $table = 'student_emergency_contact_pictures';

    protected $fillable = [
        'student_id', 'name', 'url',
    ];

    protected $dates = [
        'created_at', 'updated_at',
    ];
}

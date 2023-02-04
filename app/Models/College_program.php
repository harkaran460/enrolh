<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College_program extends Model
{
    use HasFactory;

    public function program(){
        return $this->hasMany('App\Models\College', 'id')->orderBy('college_name', 'asc');;
} 
}

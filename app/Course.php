<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'course_name',  'categary','duration', 'course_type' ,'target_group' ,'description'
        ];
}

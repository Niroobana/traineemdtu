<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training_program extends Model
{
    protected $fillable = [
        'program_name', 'date', 'location' ,'duration' ,'content' ,'target_group','no_of_trainees','no_of_resources','no_of_staffs'
    ];
    protected $casts = [
        'program_type'=>'select',
    ];
}

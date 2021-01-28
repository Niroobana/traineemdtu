<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'first_name','last_name','nic', 'email', 'designation' ,'address' ,'department' ,'mobile_no','grade','experience'
    ];
    protected $casts = [
        'employee_role'=>'select',
        'gender' => 'select',

    ];
}

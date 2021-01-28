<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = [
        'program_id','program_name','stationary', 'accommodation', 'refreshment' ,'total_amount' 
    ];
}

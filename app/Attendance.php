<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected  $guarded = [];

    protected $dates = [
        'working_day', 'in_at', 'out_at'
    ];
}

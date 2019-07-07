<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = ['student_id', 'working_day', 'in_at', 'out_at', 'absence_reason'];

    protected $dates = [
//        'working_day', 'in_at', 'out_at'
    ];
    protected $casts = [
//        'working_day' => 'datetime:d-m-Y',
//        'in_at' => 'datetime:H:i',
//        'out_at' => 'datetime:H:i',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function scopeWithStudent($query)
    {
        return $query
            ->leftjoin('students', 'attendances.student_id', '=', 'students.id')
            ->select('attendances.*', 'students.name as student_name', 'students.roll_no');
    }

    public function scopeAbsents($query)
    {
        return $query
            ->where('in_at', '>', 'students.id')
            ->select('attendances.*', 'students.name as student_name', 'students.roll_no');
    }

//    public function getInAtAttribute()
//    {
//        return $this->in_at->format('H:i');
//    }
//
//    public function getOutAtAttribute()
//    {
//        return $this->out_at->format('H:i');
//    }


//    public function setInAtAttribute($value)
//    {
//        $this->attributes['in_at'] = $value . ':00';
//    }
//
//    public function setOutAtAttribute($value)
//    {
//        $this->attributes['out_at'] = $value . ':00';
//    }


}

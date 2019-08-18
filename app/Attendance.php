<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = [
        'student_id',
        'working_day',
        'in_at', 'out_at',

        'missing',
        'approved',
        'remarks',
    ];

    protected $casts = [
        'missing' => 'boolean',
        'approved' => 'boolean',
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

    public function scopeMissingAttendances($query)
    {
        return $query
            ->where(function ($query) {
                $query->where('missing', true);
                $query->where('approved', false);
            });
        //            ->where('in_at', '=', null)
        //            ->OrWhere('out_at', '=', null)
        //            ->orWhere('in_at', '>=', Carbon::parse('08:15'))
        //            ->orWhere('out_at', '<=', Carbon::parse('13:30'));
    }

    public function scopeApprovedAttendances($query)
    {
        return $query
            ->where(function ($query) {
                $query->where('approved', true);
            });
    }

    public function setMissingAttribute($value)
    {
        $this->attributes['missing'] = ($value == 'on') ? 1 : 0;
    }

    public function setApprovedAttribute($value)
    {
        $this->attributes['approved'] = ($value == 'on') ? 1 : 0;
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected  $guarded = [];
    //    protected $dates = ['dob', 'doa'];
    //    protected $dateFormat = "U";

    //    protected $with = ['attendances'];

    public function parents()
    {
        return $this->belongsTo(ParentModel::class, 'parent_id');
    }

    public function classes()
    {
        return $this->belongsToMany(
            ClassModel::class,
            $table = "class_student",
            $relatedPivotKey = 'student_id',
            $foreignPivotKey = 'class_id'
        );
    }

    public function path()
    {
        return "/students/{$this->id}";
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
}

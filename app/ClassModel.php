<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    protected $fillable = ['title'];

    protected $table = 'classes';

    public function Students()
    {
        return $this->belongsToMany(
            Student::class,
            "class_student",
            'class_id',
            'student_id'
        )
            ->orderBy('date_from', 'desc')
            ->as('class_enrollment')
            ->withPivot('date_from', 'date_to');
    }


    public function RelatedStudent($studentId)
    {
        // return ClassModel::find($this->id)->with(
        //     [
        //         'students' =>
        //         function ($query) use ($studentId) {
        //             $query->where('student_id', $studentId);
        //         }
        //     ]
        // );
    }
}

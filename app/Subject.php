<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['title', 'class_id'];

    public function Class()
    {
        return $this->belongsTo(ClassModel::class);
    }
}

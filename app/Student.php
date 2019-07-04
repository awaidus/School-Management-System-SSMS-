<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected  $guarded = [];
    protected $dates = [];
//    protected $with = ['attendances'];

    public function parents()
    {
        return $this->belongsTo(Parents::class, 'parent_id');
    }
    /**
     * Get the comments for the blog post.
     */
    public function classes()
    {
        return $this->belongsTo(Classes::class);
    }
    /**
     * Get a string path for the thread.
     *
     * @return string
     */
    public function path()
    {
        return "/students/{$this->id}";
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

}

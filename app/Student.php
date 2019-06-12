<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * Get the comments for the blog post.
     */
    public function comments()
    {
        return $this->belongsTo(Classes::class);
    }
}

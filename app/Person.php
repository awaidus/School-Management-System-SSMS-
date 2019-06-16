<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'persons'; 

    /**
     * Get the Children/ Students record associated with the Person/ Parents.
     */
    public function students()
    {
        return $this->hasMany(Student::class, 'parent_id');
    }
}

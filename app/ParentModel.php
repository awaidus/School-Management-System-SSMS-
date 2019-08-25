<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParentModel extends Model
{
    protected $table = 'parents';

    protected $fillable = ['father_name', 'mother_name', 'address', 'phone_no', 'email'];

    /**
     * Get the Students record associated with the Parents.
     */
    public function students()
    {
        return $this->hasMany(Student::class, 'parent_id');
    }
}

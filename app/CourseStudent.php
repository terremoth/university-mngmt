<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseStudent extends Model
{
    public function student()
    {
        return $this->hasOne(Student::class);
    }

    public function course()
    {
        return $this->hasOne(Course::class);
    }
}

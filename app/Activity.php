<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}

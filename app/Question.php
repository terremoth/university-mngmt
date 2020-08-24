<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }

    public function type()
    {
        return $this->hasOne(QuestionsType::class);
    }

    public function alternatives()
    {
        return $this->hasMany(QuestionsAlternative::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionsAlternative extends Model
{
    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function answers()
    {
        return $this->hasMany(QuestionsAnswer::class);
    }
}

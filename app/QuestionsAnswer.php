<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionsAnswer extends Model
{
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function alternative()
    {
        return $this->belongsTo(QuestionsAlternative::class);
    }
}

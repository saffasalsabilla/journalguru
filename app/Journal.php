<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Journal extends Model
{
    public function course_journal(){
        return $this->hasOne('App\Course', 'id', 'course');
    }

    public function teacher_journal(){
        return $this->hasOne('App\User', 'id', 'guru_id');
    }
}

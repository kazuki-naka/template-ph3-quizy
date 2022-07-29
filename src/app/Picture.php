<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Choice;
use App\Prefecture;

class Picture extends Model
{
    protected $table = 'questions';

    public function getChoice(){
        return $this->hasMany(Choice::class, 'question_id');
    }

    public function getPrefecture(){
        return $this->belongsTo(Prefecture::class, 'big_question_id');
    }
}

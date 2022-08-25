<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Picture;

class Prefecture extends Model
{
    protected $table = 'big_questions';
    protected $fillable = ['name'];
    public $timestamps = false;

    public function getData(){
        return $this->hasMany(Picture::class, 'big_question_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Picture;

class Choice extends Model
{
    protected $table = 'choices';

    public function getPicture(){
        return $this->belongsTo(Picture::class, 'id');
    }
}

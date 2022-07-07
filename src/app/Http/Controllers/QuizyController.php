<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizyController extends Controller
{
    public function index($id){
        $data = ['choice' => ['たかなわ','たかわ','こうわ','むこうひら','むきひら','むかいなだ'], 'id' => $id];
        return view('quiz.index', $data);
    }
}

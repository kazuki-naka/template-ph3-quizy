<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Choice;
use App\Picture;
use App\Prefecture;


class QuizyController extends Controller
{
    public function __invoke($id){
        $big_questions = Prefecture::where('id', $id) -> first();
        $questions = Prefecture::with('getData') -> find($id) -> getData;
        $choices_list = Picture::with('getChoice') -> where('big_question_id', $id) -> get();
        return view('quiz.index', compact('big_questions', 'questions', 'choices_list', 'id'));
    }
}

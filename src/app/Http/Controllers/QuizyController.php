<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizyController extends Controller
{
    public function index($id){
        $big_questions = DB::table('big_questions') -> where('id', $id) -> first();
        $questions = DB::table('questions') -> where('big_question_id', $id) -> get();
        $choices = DB::table('choices') -> get();
        return view('quiz.index', ['big_questions' => $big_questions, 'questions' => $questions, 'choices' => $choices, 'id' => $id]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Choice;
use App\Picture;
use App\Prefecture;


class QuizyController extends Controller
{
    public function index($id){
        $big_question = Prefecture::where('id', $id) -> first();
        $questions = Prefecture::with('getData') -> find($id) -> getData;
        $choices_list = Picture::with('getChoice') -> where('big_question_id', $id) -> get();
        return view('quiz.index', compact('big_question', 'questions', 'choices_list', 'id'));
    }

    public function main(){
        $big_questions = Prefecture::all();
        return view('quiz.main', compact('big_questions'));
    }

    public function add(Request $request){
        return view('add');
    }

    public function create(Request $request){
        $param = ['name' => $request->name];
        DB::insert('insert into big_questions(name) values(:name)', $param);
        return redirect('/main');
    }

    public function delete(Request $request){
        Prefecture::find($request->big_question_id)->delete();
        return redirect('/main');
    }

    public function edit(Request $request){
        $id = $request->big_question_id;
        return view('edit', compact('id'));
    }

    public function update(Request $request){
        Prefecture::find($request->selected_id)->update(['name' => $request->name]);
        return redirect('/main');
    }
}

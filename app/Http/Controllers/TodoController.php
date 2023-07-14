<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todos;

class TodoController extends Controller
{
    function addTodo(Request $req){
        $todo = new Todos();
        $todo->sno = null;
        $todo->todo = $req->todo;
        $todo->save();
        return redirect('/');
    }

    function showTodo(){
        $todos = Todos::all();
        return view('index',['todos'=>$todos]);
    }

    function deleteTodo($sno){
        $todo = Todos::find($sno);
        $todo->delete();
        return redirect('/');
    }
}
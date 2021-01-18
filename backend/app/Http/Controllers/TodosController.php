<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodosController extends Controller
{
    //
    public function index() {
        $todos = Todo::all();
        return view('todos.index')->with('todos',$todos);
    }

    public function create(){
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $model = new Todo;
        $model->body = $request->body;
        $model->save();
        return redirect('/');
    }

    public function edit($id){
        $model = Todo::find($id);
        return view('todos.edit', ['todo' => $model]);
    }

    public function update(Request $request,todo $todo){
        $todo->body = $request->body;
        $todo->save();
        // return view('todos.create');
        return redirect('/');
    }

    public function destroy(todo $todo) {
        $todo->delete();
       return redirect('/');
     }
}

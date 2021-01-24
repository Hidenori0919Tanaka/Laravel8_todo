<?php

namespace App\Http\Controllers;
use Validator; 

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
        $validator = Validator::make($request->all(), [ // <---
            'body' => ['required','min:2','max:5']
        ]);

        // Validator::make($request->all(), [
        //     'body' => 'required',
        // ])->validate();

        if ($validator->fails()) {
            return redirect('todos/create')
                ->withErrors($validator)
                ->withInput();
        } else {
            $model = new Todo;
            $model->body = $request->body;
            $model->save();
            return redirect('/');
        }
    }

    public function edit($id){
        $model = Todo::find($id);
        return view('todos.edit', ['todo' => $model]);
    }

    public function update(Request $request,todo $todo){
        // $validator = Validator::make($request->all(), [ // <---
        //     'body' => ['required','min:2','max:5']
        // ]);

        Validator::make($request->all(), [
            'body' => 'min:5',
        ])->validate();

        if ($validator->fails()) {
            return view('todos.edit', ['todo' => $request])
                ->withErrors($validator);
        } else {
            $todo->body = $request->body;
            $todo->save();
            return redirect('/');
        }
    }

    public function destroy(todo $todo) {
        $todo->delete();
       return redirect('/');
     }
}

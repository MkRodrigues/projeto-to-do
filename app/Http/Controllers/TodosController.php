<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller{
    public function index(){
        return view('index')->with('todos', Todo::all());
    }

    public function show($todoId){
        return view('show')->with('todo', Todo::find($todoId));
    }

    public function create(){
        return view('create');
    }

    public function store(){
        $data = request()->all();
        $todo = new Todo();

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;
        $todo->save();

        return redirect('/todos');
    }

    public function destroy($todoId){
        $todo = Todo::find($todoId);
        // dd($todo);

        $todo->delete();
    
        return redirect('/todos');
    }

    public function showUpdate($todoId){
        return view('showUpdate')->with('todos', Todo::find($todoId));
    }

    public function update($todoId){
        $data = request()->all();
        $todo = Todo::find($todoId);
        $todo->update($data);
        return redirect('/todos');
    }

}

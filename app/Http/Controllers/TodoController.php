<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use App\Http\Requests\TodoCreateRequest;
use App\Http\Requests\TodoUpdateRequest;

class TodoController extends Controller
{
    public function index(Request $request){

        $todos = Todo::all();

        return view('todo.index')->with(['todos'=> $todos]);
        
    }


    public function create(){

        return view('todo.create');

    }

    public function store(TodoCreateRequest $request){

        //dd($request->all());
       // $request->validate([
           // 'title' => 'required|max:255',
      //  ]);
        Todo::create($request->all());
        return redirect()->back()->with('message', 'Todo Created Successfully');


    }

    public function edit(Todo $todo){     //route model binding 3:23: in video u can use below also
        //public function edit($id)
      // $todo_single = Todo::find($id);
        return view('todo.edit',compact('todo'));
    }


    public function update(Todo $todo, TodoUpdateRequest $request){

        $todo->update([
            'title' => $request->title_update
        ]);
        return redirect(route('todo.index'))->with('message','Updated');
    }
}

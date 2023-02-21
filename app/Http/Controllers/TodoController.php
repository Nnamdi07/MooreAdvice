<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        return view('home');
    }

    public function tasks(){
        $todo = Task::all();
        return view('tasks')->with('todos', $todo);
    }

    public function create(){
        return view('create');
    }

    public function details(Task $todo){
        return view('details')->with('todos', $todo);
    }
    
    public function edit(Task $todo){
        return view('edit')->with('todos', $todo);
    }

    
    public function update(Task $todo){

        try {
            $this->validate(request(), [
                'name' => ['required'],
                'description' => ['required'],
        
            ]);
        } catch (ValidationException $e) {
        }

        $data = request()->all();

    
        $todo->title = $data['name'];
        $todo->description = $data['description'];
        $todo->save();

        session()->flash('success', 'Todo updated successfully');

        return redirect('tasks');

    }
    
    public function delete(Task $todo){

        $todo->delete();

        return redirect('tasks');

    }

    public function store(){


        try {
            $this->validate(request(), [
                'name' => ['required'],
                'description' => ['required']
            ]);
        } catch (ValidationException $e) {
        }


        $data = request()->all();

        $todo = new Task();
        //On the left is the field name in DB and on the right is field name in Form/view
        $todo->title = $data['name'];
        $todo->description = $data['description'];
        $todo->save();

        session()->flash('success', 'Todo created succesfully');

        return redirect('tasks');

    }
}

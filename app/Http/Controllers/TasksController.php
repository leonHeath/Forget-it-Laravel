<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Task;

class TasksController extends Controller
{

    public function index(){
        $tasks = Task::where('user_id', Auth::id())->get();
        return view('layouts/tasks', compact('tasks'));
    }

    public function store(){
        //Create and store a new task
        Task::create([
            'title' => "Default Task",
            'description' => "Write task description here",
            'user_id' => Auth::id()
        ]);
        return redirect('tasks');
    }

    public function edit($id){
        //Create modal for editing tasks
    }

    public function update(Request $request, $id){
        //Called on submitting of update
    }

    public function destroy($id){
        //Delete tasks
    }

}

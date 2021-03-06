<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Task;

class TaskController extends Controller
{

    /*
     * Get only tasks belonging to the the user
     */
    public function index(){
        $tasks = Task::where('user_id', Auth::id())->get();
        return view('layouts/tasks', compact('tasks'));
    }

    /*
     * Create and store a new task
     * Uses default values that may be edited by the user later
     */
    public function store(){
        Task::create([
            'title' => "Default Task",
            'description' => "Write task description here",
            'user_id' => Auth::id()
        ]);
        return redirect('tasks');
    }

    /*
     * Show task from id
     */
    public function show(Task $task){
        return $task->toJson();
    }

    public function update($id, Request $request){
        //Called on submitting of update
        $task = Task::find($id);
        $task->title = $request->task_title;
        $task->description = $request->task_desc;
        $task->save();
        return redirect('tasks');
    }

    public function destroy(Task $task){
        //Delete tasks
    }

}

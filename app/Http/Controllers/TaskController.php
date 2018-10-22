<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function login()
    {
        $users = User::all();
        return view('welcome', compact('users'));
    }

    public function tasklist()
    { if(request()->has("status_id")){
        $tasks= Task::where("status_id", request("status_id"))->paginate(20);
        return view('tasklist', compact('tasks'));
    } else {
        $tasks = Task::orderBy('add_date', 'desc')->paginate(20);;
        return view('tasklist', compact('tasks'));
    }
    }

    public function create ()
    {
        return view ('create');
    }


    public function store(Request $request)
    {

        $task = new Task;
        $task->task_name = $request->task_name;
        $task->task_description = $request->task_description;
        $task->status_id = $request->status_id;
        $task->add_date = $request->add_date;
        $task->completed_date = $request->completed_date;
        $task->save();
        return back();
    }
    public function edit()
    {
        $tasks= Task::all();
        return view ('edit',compact('tasks'));
    }
    public function editdelete(Request $request,$id)
    {
        $task = Task::find($id);
        return view('editdelete',compact('task'));
    }

    public function update(Request $request,$id)
    {

        $task = Task::find($id);
        $task->task_name = $request->task_name;
        $task->task_description = $request->task_description;
        $task->status_id = $request->status_id;
        $task->add_date = $request->add_date;
        $task->completed_date = $request->completed_date;
        $task->save();
        return redirect(route('tasklist'))->with('successMsg','Task Successfully Update');
    }

    public function delete($id)
    {
        Task::find($id)->delete();
        return redirect(route('tasklist'))->with('successMsg','Task Successfully Delete');
    }
}
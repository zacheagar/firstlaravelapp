<?php

namespace App\Http\Controllers;

Use App\Task;

class TasksController extends Controller
{

    public function index()
    {
      $tasks = Task::all();

      return view('tasks.index', compact('tasks'));
    }


    public function show($id)
    {
      $task = Task::find($id);
      return $task;

      return view('tasks.show',compact('task'));

        //
    }
}

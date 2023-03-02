<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    //
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create(Project $project)
  {

    $task = new Task();
    $users = $task->assignees();

    return view('tasks.create', [
      'project' => $project,
      'users' => $users,
      'task' => $task
    ]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    dd($request);
  }

  /**
   * Display the specified resource.
   */
  public function show(Task $task)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Project $project, Task $task)
  {
    return view('tasks.edit', [
      'project' => $project,
      'users' => $task->assignees(),
      'task' => $task
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Project $project, Task $task)
  {
    dd($request->all());
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Task $task)
  {
    //
  }
}

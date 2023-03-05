<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskStoreRequest;
use App\Http\Requests\TaskUpdateRequest;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use ProtoneMedia\Splade\Facades\Toast;

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
    // $this->authorize('create', [auth()->user()->id, $project->id]);

    if (Gate::allows('create')) {

      $task = new Task();
      $users = $task->assignees();

      return view('tasks.create', [
        'project' => $project,
        'users' => $users,
        'task' => $task,
        'statuses' => $task::getStatuses()
      ]);
    }
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(TaskStoreRequest $request, Project $project)
  {
    $this->authorize('create', [Task::class, $project]);

    $task = new Task();

    $data = $request->only('name', 'description', 'status');
    $data['user_id'] = $request->get('assigned_to');
    $data['project_id'] = $project->id;

    Task::create($data);

    Toast::autoDismiss(5)->success('Task added successfully!');

    return redirect()->route('projects.show', $project->id);
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
    $this->authorize('edit', $project);

    return view('tasks.edit', [
      'project' => $project,
      'users' => $task->assignees(),
      'statuses' => $task->getStatuses(),
      'task' => $task,
      'assigned_to' => $task->user->id
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(TaskUpdateRequest $request, Project $project, Task $task)
  {
    $this->authorize('update', $project);

    $data = $request->only('name', 'description', 'status');
    $data['user_id'] = $request->assigned_to;
    $data['project_id'] = $project->id;

    // $task->fill($data)->save();
    $task->update($data);

    Toast::autoDismiss(5)
      ->success('Task updated!');

    return back();
  }

  /**
   * Update the specified resource in storage.
   */
  public function partial(Request $request, Project $project, Task $task)
  {
    $this->authorize('assign_user', $project);

    // Define custom error messages
    $messages = [
      'assigned_to.required' => 'Please pick a user to re-assign this task to',
    ];

    $request->validate([
      'assigned_to' => 'bail|required|integer',
    ], $messages);

    $task->update(['user_id' => $request->assigned_to]);

    Toast::autoDismiss(5)
      ->success('Task re-assigned!');

    return back();
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Request $request, Project $project, Task $task)
  {
    // $request->validateWithBag('taskDeletion', [
    //   'password' => ['required', 'current-password'],
    // ]);

    dd($task);

    // Delete the task
    $task->delete();

    Toast::autoDismiss(5)->info('Task deleted successfully!');

    // Return a response
    return back();
  }
}

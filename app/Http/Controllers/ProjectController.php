<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectUpdateRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use ProtoneMedia\Splade\Facades\Toast;

class ProjectController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    // $projects = Project::latest()->paginate();
    // $projects = Project::viewableBy(Auth::user())->get();

    $user = auth()->user();

    if (Gate::allows('view-all-projects')) {
      // User has permission to view all projects
      $projects = Project::all();
    } else {
      // User can only view projects they created or are assigned to
      $projects = Project::where('user_id', $user->id)
        ->orWhereHas('tasks', function ($query) use ($user) {
          $query->where('user_id', $user->id);
        })
        ->get();
    }

    return view('projects.index', compact('projects'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $customers = \App\Models\Customer::pluck('name', 'id');
    return view('projects.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   */
  public function show(Project $project)
  {
    $this->authorize('view', $project);

    return view('projects.show', [
      'project' => $project->load('owner', 'customer')
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Project $project)
  {
    return view('projects.edit', [
      'project' => $project,
      'customers' => \App\Models\Customer::get()
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(ProjectUpdateRequest $request, Project $project)
  {
    $this->authorize('view', $project);

    $data = $request->only('name', 'description', 'customer_id', 'start_date', 'end_date', 'budget');

    $project->fill($data)->save();

    Toast::autoDismiss(5)->success('Project updated successfully');

    return back();
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Project $project)
  {
    //
  }
}

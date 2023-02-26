<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

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
      'project' => $project
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Project $project)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Project $project)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Project $project)
  {
    //
  }
}

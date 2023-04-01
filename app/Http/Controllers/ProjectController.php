<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use ProtoneMedia\Splade\Facades\SEO;
use ProtoneMedia\Splade\Facades\Toast;

class ProjectController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {

    SEO::title('Progex — Project list')
      ->description('Projects that you are allowed to view. Either you created them yourself or you are a part of the team');

    $currentUser = auth()->user();
    // $authorization = Gate::inspect('viewAny', Project::class);
    $this->authorize('viewAny', Project::class);

    // if ($authorization->denied()) {
    // $projects = Project::where('user_id', $currentUser->id)
    //   ->orWhereHas('tasks', function ($query) use ($currentUser) {
    //     $query->where('user_id', $currentUser->id);
    //   })
    //   ->get();
    // }

    $projects = $currentUser->createdProjects()->with('owner')->orWhereHas('tasks', function ($query) use ($currentUser) {
      $query->where('user_id', $currentUser->id);
    })->get();

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
    SEO::title('Progex — ' . $project->name)
      ->description($project->description);

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
    $this->authorize('update', $project);

    return view('projects.edit', [
      'project' => $project,
      'customers' => \App\Models\Customer::get()
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(StoreProjectRequest $request, Project $project)
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

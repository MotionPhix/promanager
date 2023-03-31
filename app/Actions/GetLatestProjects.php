<?php

namespace App\Actions;

use App\Models\Project;
// use Illuminate\Support\Collection;
use Illuminate\View\View;

class GetLatestProjects {

  public function __invoke(): View
  {
    return view('index', [
      'projects' => Project::with('customer:customers.id,customers.name')->latest()->limit(6)->orderBy('created_at')->orderBy('end_date')->get(['projects.id', 'projects.customer_id', 'projects.name', 'projects.end_date', 'projects.description']),
      'projectsCount' => Project::count()
    ]);
  }

}


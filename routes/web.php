<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('splade')->group(function () {
  // Registers routes to support password confirmation in Form and Link components...
  Route::spladePasswordConfirmation();

  // Registers routes to support Table Bulk Actions and Exports...
  Route::spladeTable();

  // Registers routes to support async File Uploads with Filepond...
  Route::spladeUploads();

  Route::get('/', function () {
    return view('index');
  })->name('index');

  Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
      return view('dashboard.index');
    })->middleware(['verified'])->name('dashboard');

    Route::resource('projects', \App\Http\Controllers\ProjectController::class);
    Route::resource('projects.tasks', \App\Http\Controllers\TaskController::class);
    Route::patch('/projects/{project}/tasks/{task}/partial', [\App\Http\Controllers\TaskController::class, 'partial'])->name('projects.tasks.partial');

    Route::resource('reports', \App\Http\Controllers\ReportController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
  });

  require __DIR__ . '/auth.php';
});

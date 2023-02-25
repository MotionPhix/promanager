<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  use HasFactory;

  protected $casts = [
    'budget' => 'decimal:2',
  ];

  public function owner()
  {
    return $this->belongsTo(User::class);
  }

  public function scopePublished($query)
  {
    return $query->where('published', true);
  }

  public function scopeUnpublished($query)
  {
    return $query->where('published', false);
  }

  public function getBudgetAttribute($value)
  {
    return 'Mk' . number_format($value, 2);
  }

  public function tasks()
  {
    return $this->hasMany(Task::class);
  }

  public function members()
  {
    return $this->hasManyThrough(User::class, Task::class, 'project_id', 'id', 'id', 'user_id');
  }
}

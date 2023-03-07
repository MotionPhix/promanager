<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  use HasFactory;

  protected $fillable = [
    'name', 'slug', 'permissions',
  ];

  protected $casts = [
    'permissions' => 'array',
  ];

  public function users()
  {
    return $this->belongsToMany(User::class, 'role_users');
  }

  public function hasAccess(array $permissions): bool
  {
    foreach ($permissions as $permission) {
      return $this->hasPermission($permission);
    }

    return false;
  }

  private function hasPermission(string $permission): bool
  {
    return $this->permissions[$permission] ?? false;
  }

  public function givePermissionTo($permission, $value = true)
  {
    $permission = Permission::where('slug', $permission)->first();

    $permissions = $this->permissions;
    $permissions[$permission->slug] = $value;

    $this->permissions = $permissions;

    $this->save();
  }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotAuthenticated
{
  public function handle($request, Closure $next, ...$guards)
  {
    if (!Auth::guard($guards)->check()) {
      return redirect()->route('login');
    }

    return $next($request);
  }

  protected function unauthenticated($request, array $guards)
  {
    if ($request->expectsJson()) {
      throw new AuthenticationException('Unauthenticated.', $guards);
    }

    return redirect()->route('login');
  }
}

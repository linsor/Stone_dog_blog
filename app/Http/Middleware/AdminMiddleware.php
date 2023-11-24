<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
  /**
   * Handle an incoming request.
   *
   * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
   */
  public function handle(Request $request, Closure $next): Response
  {

    if (!auth()->check()) 
    {
      return redirect()->route('home');
    } 
    
    $user = auth()->user();
    $role = Role::find($user->role)->name;

   
    
    if ($role !== 'admin') 
    {
      return redirect()->route('post.index');
    }

    return $next($request);
  }
}

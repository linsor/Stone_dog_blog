<?php

namespace App\Http\Middleware;

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

        //Временно закоментировал для удобства тестирования проекта
        
       /* if (auth()->user()->role !== 'admin') {
            return redirect()->route('main.index');
        }; */
        
        return $next($request);
    }
}

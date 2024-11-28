<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role):Response
    {
        // Check if user is authenticated and has the specified role
        if (!$request->user() || (int) $request->user()->role !== (int) $role  ) {
            return redirect('login');
        }

        return $next($request);
    }

}

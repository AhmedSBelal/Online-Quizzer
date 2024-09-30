<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next, $is_admin): Response
    public function handle(Request $request, Closure $next): Response
    {// column table name
        if (Auth::user()->is_admin === 'user') {
            // return to_route('admin.dashboard');
            return $next($request);
        }
        return redirect()->back();
     }
}

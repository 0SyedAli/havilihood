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
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (!Auth::check()) {
            return  redirect('/')->with('error', 'You are not authorized to access this page.');
        }

        $userRole = Auth::user()->role;

        if ($userRole !== $role) {
            return response()->json(['status' => 'error', 'message' => 'forbidden request'], 401);
        }

        return $next($request);
    }
}

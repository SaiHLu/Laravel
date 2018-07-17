<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class PostMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
            if($user->hasRole('Staff') || $user->hasRole('Manager')) {
                return $next($request);
            } else {
                return redirect('/');
            }
        } else {
            return redirect('/users/login');
        }
        return $next($request);
    }
}

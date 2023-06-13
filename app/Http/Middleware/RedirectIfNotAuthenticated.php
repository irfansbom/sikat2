<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectIfNotAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, ...$role)
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        if (empty($roles)) {
            return $next($request);
        }

        foreach ($roles as $role) {
            if (auth()->user()->hasRole($role)) {
                return $next($request);
            }
        }

        abort(403, 'Unauthorized');
    }
}

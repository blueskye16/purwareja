<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if(!auth()->check() || auth()->user()->email !== 'kevin@gmail.com') {
        // if(!auth()->check() || auth()->user()->role == FALSE) {
        //     abort(403);
        // }
        // if(!auth()->check() || !auth()->user()->role) {
        //     abort(403);
        // }
        if(!auth()->check() || !auth()->user()->is_admin) {
            abort(403);
        }

        // if(!auth()->check() || auth()->user()->role == 0) {
        //     abort(403);
        // }

        // if(!auth()->check() || Auth::user()->role !== 1) {
        //     abort(403, 'Unauthorized');
        // }

        return $next($request);
    }
}

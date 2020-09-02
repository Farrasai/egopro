<?php

namespace App\Http\Middleware;

use Closure;

class OwnerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // if (!Auth::check()) {
        //     return redirect()->route('admin.login');
        // }

        // if (Auth::user()->role == 2) {
        //     return $next($request);
        // }
    }
}

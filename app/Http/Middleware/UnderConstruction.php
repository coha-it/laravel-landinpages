<?php

namespace App\Http\Middleware;

use Closure;

class UnderConstruction
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
        if (env('APP_UNDER_CONSTRUCTION')) {
            return $next($request);
        }
        return redirect()->route('home');
    }
}

<?php

namespace App\Http\Middleware;

use Closure;

class NotUnderConstruction
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
            return redirect()->route('coming_soon');
        }
        return $next($request);
    }
}

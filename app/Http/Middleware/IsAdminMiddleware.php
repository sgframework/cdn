<?php

namespace cdn\Http\Middleware;

use Closure;
use Auth;
class IsAdminMiddleware
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
        if(!Auth::check() || Auth::user()->is_admin != '1'){
            return redirect()->route('global.index');
        }
        return $next($request);
    }
}
<?php

namespace App\Http\Middleware;

use Closure;

class userRole
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
        if (auth()->user()->role == 'admin' || auth()->user()->role == 'superadmin') {
            return $next($request);
        }

        return redirect('home')->with('error', "you're not admin");
    }
}

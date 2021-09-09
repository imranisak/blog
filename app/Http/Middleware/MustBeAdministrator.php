<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MustBeAdministrator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request,   Closure $next)
    {
        if(auth()->guest()) return redirect('/login');
        if(auth()->user()->username!=='imranisak') return redirect('/login');

        return $next($request);
    }
}

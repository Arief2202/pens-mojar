<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsUp2ai
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->id_role == 2) {
            return $next($request);
        }
        else {
        return redirect('/login')->with('error', "Anda tidak punya akses UP2AI");
    }
    }
}

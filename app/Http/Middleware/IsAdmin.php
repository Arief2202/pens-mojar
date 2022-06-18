<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
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
        if (auth()->user()->id_role == 10) {
            return $next($request);
        } else {
            return back()->withErrors('anda bukan superadmin');
        }
        // elseif (auth()->user()->id_role == 1) {
        //     return $next($request);
        // }
        // elseif (auth()->user()->id_role == 2) {
        //     return $next($request);
        // }
        // elseif (auth()->user()->id_role == 3) {
        //     return $next($request);
        // }
        // elseif (auth()->user()->id_role == 4) {
        //     return $next($request);
        // }


        return redirect('/login')->with('error', "You don't have an access.");
    }
}

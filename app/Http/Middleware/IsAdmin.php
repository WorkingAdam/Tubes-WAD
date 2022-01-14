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
        if (!auth()->check() || !$request->user()->is_admin) {
            return redirect('home');
        }
        return $next($request);
        /** 
        if(!(auth()->user()->is_admin)){
            return redirect('home');
        }elseif(auth()->user()->is_admin == 0){ //member
            return $next($request);
        }elseif(auth()->user()->is_admin == 1){ //admin
            return $next($request);
        }elseif(auth()->user()->is_admin == 2){ //photographer
            return $next($request);
        }
        */
   
        //return redirect('home')->with('error',"You don't have admin access.");
    }
}

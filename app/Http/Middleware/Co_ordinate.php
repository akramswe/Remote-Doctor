<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Co_ordinate
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
        if (Auth::check() && Auth::user()->role == 'Co_ordinate') { 
            return $next($request);
        }
        elseif (Auth::check() && Auth::user()->role == 'Branch_Admin') {
            return redirect('/Branch_Admin');
        }
         elseif (Auth::check() && Auth::user()->role == 'Doctor') {
            return redirect('/Doctor');
        }
         elseif (Auth::check() && Auth::user()->role == 'Patient') {
            return redirect('/Patient');
        }
        else {
            return redirect('/unauthorized');
        }
    }
}

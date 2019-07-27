<?php

namespace App\Http\Middleware;

use Closure;
use Auth; //at the top

class Branch_Admin
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
       if (Auth::check() && Auth::user()->role == 'Branch_Admin') {
            return $next($request);
        }
        elseif (Auth::check() && Auth::user()->role == 'Co_ordinate') {
            return redirect('/Co_ordinate');
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

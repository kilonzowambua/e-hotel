<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotstaff
{
	
	public function handle($request, Closure $next, $guard = 'staff')
	{
		if (Auth::guard($guard)->check()) {
	       return redirect('/staffdashbord');
	    }

	    return $next($request);
	}
	}


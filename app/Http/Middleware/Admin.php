<?php namespace App\Http\Middleware;

use Closure;
use \Redirect, \Auth;

class Admin {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next){	
		if(Auth::check()){
			if(in_array('admin', Auth::user()->roles)){
				return $next($request);
			}
			else{
				return Redirect::route('home');
			}
		}
		else{
			return Redirect::route('login');
		}
	}

}

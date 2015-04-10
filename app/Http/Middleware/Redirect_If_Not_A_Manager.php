<?php namespace App\Http\Middleware;

use Closure;

class Redirect_If_Not_A_Manager {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
        if (! $request->user()->IsManager())
        {
         return redirect('articles');
        }
		return $next($request);
	}

}

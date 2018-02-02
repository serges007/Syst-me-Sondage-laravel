<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;

class HasVoted {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		$user = $request->user();

		if ($user && !$user->hasVoted($request->id))
		{
			return $next($request);
		}
		return new RedirectResponse(url('/'));
	}

}

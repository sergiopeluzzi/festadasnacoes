<?php namespace App\Http\Middleware;

use Closure;

class RedirectIfNotAdministrador {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
        if (!$request->user()->isAdministrador() && !$request->user()->isFuncionario())
        {
            return redirect('admin/acessonegado');
        }

		return $next($request);
	}

}

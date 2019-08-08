<?php

namespace App\Http\Middleware;

use Closure;

class ChecarHorario
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
        date_default_timezone_set('America/Sao_Paulo');

        if (date('H') >= 23) {
            return redirect('/');
        }

        return $next($request);
    }
}

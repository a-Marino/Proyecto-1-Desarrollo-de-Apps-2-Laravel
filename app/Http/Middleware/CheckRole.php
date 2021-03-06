<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param string $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        if ($role == 'admin' && auth()->user()->role != 'admin') {
            //abort(code: 403);
            return redirect('/error-rol');
        }

        if ($role == 'enfermero' && auth()->user()->role != 'enfermero') {
            //abort(code: 403);
            return redirect('/error-rol');
        }

        if ($role == 'gestion' && auth()->user()->role != 'gestion') {
            //abort(code: 403);
            return redirect('/error-rol');
        }
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckEditingPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
{
    if (auth()->user()->can('editar filas')) {
        return $next($request);
    }

    if (session('authorized_to_edit')) {
        return $next($request);
    }

    abort(403, 'No tienes autorización para editar.');
}
}

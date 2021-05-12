<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class admin_comum
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Session::get('usuario_tipo_usuario')=='1' || Session::get('usuario_tipo_usuario')=='2'){
            return $next($request);
        }
        else{
            abort(403, 'Acesso negado');
        }
    }
}
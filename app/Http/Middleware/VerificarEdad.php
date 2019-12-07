<?php

namespace App\Http\Middleware;

use Closure;

class VerificarEdad
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
        if(is_null($request->route('edad'))){
            //return redirect('usuarios/apellido-usuario');
            return redirect()->action('UsuariosController@getIndex');
        }
        return $next($request);
    }
}

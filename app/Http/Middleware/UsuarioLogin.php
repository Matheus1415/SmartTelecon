<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class UsuarioLogin
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            Log::info('Usuário não autenticado. Redirecionando para a página de login.');
            return redirect()->route('login.index');
        }

        return $next($request);
    }
}


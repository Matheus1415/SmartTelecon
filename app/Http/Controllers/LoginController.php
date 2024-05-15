<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('Components.login');
    }

    public function store(Request $request)
    {
        $credentials = $request->only('email', 'senha');

        $usuario = Usuario::where('email', $credentials['email'])->first();

        if ($usuario && Hash::check($credentials['senha'], $usuario->senha)) {
            Auth::login($usuario);
            return redirect()->route('dashboard.index');
        } else {
            return redirect()->route('login')->with('error', 'Credenciais inválidas. Por favor, tente novamente.');
        }
    }

    public function destroy()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}   

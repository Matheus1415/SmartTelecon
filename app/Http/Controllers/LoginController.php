<?php

namespace App\Http\Controllers;

use App\Models\User;
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
    
        $senha = $request->input('senha');
    
        $usuario = User::where('email', $request->input('email'))->first();
        $senhaCriptografada = $usuario ? $usuario->senha : ''; 
    
        if ($usuario && Hash::check($senha, $senhaCriptografada)) {
            Auth::login($usuario); 
            return redirect()->route('dashboard.index');
        } else {
            return redirect()->route('index'); 
        }
    }

    public function destroy()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}   

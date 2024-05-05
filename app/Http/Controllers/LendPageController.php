<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserGlobalRequest; // Corrigido o namespace
use App\Models\Provedor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LendPageController extends Controller
{
    public function index()
    {
        return view('lendPage.index');
    }

    public function create()
    {
        return view('Components.cadastro-lend-page');
    }

    public function store(UserGlobalRequest $request)
    {
        $tipo = $request->input('tipoUse');
        $provedor = null;
    
        if($tipo === 'provedor'){
            $provedorData = [
                'empresa' => $request->input('empresa'),
                'cnpj' => $request->input('cnpj'),
                'endereco' => $request->input('endereco'),
                'cidade' => $request->input('cidade'),
                'estado' => $request->input('estado'),
                'cep' => $request->input('cep'),
            ];
            
            $provedor = Provedor::create($provedorData);
        }
    
        $userData = [
            'provedor_id' => $provedor ? $provedor->id : null, 
            'nome' => $request->input('nome'),
            'tipo' => $tipo,
            'email' => $request->input('email'),
            'telefone' => $request->input('telefone'),
            'senha' => Hash::make($request->input('senha')), 
        ];
    
        $user = User::create($userData);
    
        if ($provedor) {
            $user->provedor_id = $provedor->id;
            $user->save();
        }
    
        return redirect()->route('index');
    }
    
            

    public function login()
    {
        return view('Components.login');
    }

    public function autenticacao(Request $request)
    {
        $credentials = $request->only('email', 'senha');
    
        $senha = $request->input('senha');
    
        $usuario = User::where('email', $request->input('email'))->first();
        $senhaCriptografada = $usuario ? $usuario->senha : '';
    
        if ($usuario && Hash::check($senha, $senhaCriptografada)) {
            Auth::login($usuario); 
            return redirect()->route('dashboard.index');
        } else {
            return redirect()->back()->withErrors('Usuário ou senha inválidos');
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
    

}

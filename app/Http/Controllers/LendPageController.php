<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProvedorRequest;
use App\Models\Provedor;
use App\Models\User;
use Illuminate\Http\Request;

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

    public function store(ProvedorRequest $request)
    {
        $tipo = $request->input('tipo');
    
        $userData = [
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'senha' => bcrypt($request->input('senha')),
        ];
    
        // Criar o usuário comum
        $user = User::create($userData);
    
        if ($tipo === 'provedor') {
            $provedorData = [
                'user_id' => $user->id,
                'empresa' => $request->input('empresa'),
                'cnpj' => $request->input('cnpj'),
                'endereco' => $request->input('endereco'),
                'cidade' => $request->input('cidade'),
                'estado' => $request->input('estado'),
                'cep' => $request->input('cep'),
            ];
    
            Provedor::create($provedorData);
        }
        
        return redirect()->route('lendPage.index');
    }
    

    public function login() {
        return view('Components.login');
    }
}

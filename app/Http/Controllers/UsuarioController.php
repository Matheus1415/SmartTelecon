<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserGlobalRequest;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UsuarioController extends Controller
{

    public function index()
    {
        $usuarios = Usuario::all();
        
        $mensagemSucesso = session('mensagemSucesso');
        $usuarioLogado = Auth::user()->nome;
            
        return view('Components.dashboard.visualisar-usuario', [
            'usuarios' => $usuarios,
            'mensagemSucesso' => $mensagemSucesso,
            'usuarioLogado' => $usuarioLogado
        ]);
    }


    public function create()
    {
        $usuarioLogado = Auth::user()->nome;

        return view('Components.dashboard.cadastro-provedor', ['usuarioLogado' => $usuarioLogado]);
    }


    public function store(UserGlobalRequest $request) {
        $tipoUsuario = $request->input('tipoUse');
        $usuarioDate = [
            'tipo' => $request->input('tipoUse'),
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'telefone' => $request->input('telefone'),
            'senha' => Hash::make($request->input('senha')), 
        ];
        if($tipoUsuario === 'provedor'){
            $usuarioDate += [
                'empresa' => $request->input('empresa'),
                'cnpj' => $request->input('cnpj'),
                'endereco' => $request->input('endereco'),
                'cidade' => $request->input('cidade'),
                'estado' => $request->input('estado'),
                'cep' => $request->input('cep'),
            ];
        }
        Usuario::create($usuarioDate);
        return Redirect::route('dashboard.provedor.index')->with('mensagemSucesso', 'Foi criado com sucesso o provedor');
    }


    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}

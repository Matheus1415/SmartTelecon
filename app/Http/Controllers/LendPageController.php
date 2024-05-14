<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserGlobalRequest;
use App\Models\Planos;
use App\Models\Provedor;
use App\Models\User;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class LendPageController extends Controller
{
    public function index()
    {   
        $planos = Planos::all();
        $usuarios = Usuario::all();
        $usuariosTotal = Usuario::count();
        return view('lendPage.index',[
            'planos' => $planos,
            'usuarios' => $usuarios,
            'usuariosTotal' => $usuariosTotal,
        ]);
    }

    public function create()
    {
        return view('Components.cadastro-lend-page');
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
}

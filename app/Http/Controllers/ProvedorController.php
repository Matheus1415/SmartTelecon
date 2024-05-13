<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProvedorRequest;
use App\Http\Requests\UserGlobalRequest;
use App\Http\Requests\UserRequest;
use App\Models\Provedor;
use App\Models\User;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class ProvedorController extends Controller
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

    public function edit($idUsuario, $idProvedor = null)
    {
        $usuarioLogado = Auth::user()->nome ?? null;
        $provedor = Provedor::find($idProvedor);
        $user = User::find($idUsuario);

        return view('Components.dashboard.editar-usuario', [
            'user' => $user,
            'provedor' => $provedor,
            'usuarioLogado' => $usuarioLogado,
        ]);
    }

    public function update(UserRequest $request, $idUsuario, ProvedorRequest $idProvedor = null)
    {
        $user = User::findOrFail($idUsuario);
    
        $user->nome = $request->nome;
        $user->telefone = $request->telefone;
    
        if ($idProvedor) {
            $provedor = Provedor::findOrFail($idProvedor);
            $provedor->endereco = $request->endereco;
            $provedor->cidade = $request->cidade;
            $provedor->estado = $request->estado;
            $provedor->cep = $request->cep;
            $provedor->empresa = $request->empresa;
            $provedor->cnpj = $request->cnpj;
            $provedor->save();
        }
    
        if ($request->senha) {
            if (Hash::check($request->senha, $user->senha)) {
                $user->senha = Hash::make($request->nova_senha);
            } else {
            }
        }
    
        $user->save();
    
        return redirect()->route('dashboard.provedor.index')->with('mensagemSucesso', "Atualizado com sucesso!");
    }
    
    
    

    public function destroy(string $id)
    {
        $user = User::find($id);
        
        if ($user) {
            $chaveProvedor = $user->provedor_id;
            if($chaveProvedor != null){
                $provedor = Provedor::find($chaveProvedor);
                $provedor->delete();
            }
            $user->delete();    
            return redirect()->route('dashboard.provedor.index')->with('mensagemSucesso', 'Provedor de 
            ] internet deletado com sucesso!');
        } else {
            return redirect()->route('dashboard.provedor.index')->with('mensagemErro', 'Provedor de internet não encontrado.');
        }
    }
    

}


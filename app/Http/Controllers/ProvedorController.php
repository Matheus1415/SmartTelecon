<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProvedorRequest;
use App\Http\Requests\UserGlobalRequest;
use App\Http\Requests\UserRequest;
use App\Models\Provedor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProvedorController extends Controller
{
    public function index()
    {
        $usuariosAdm = User::where('tipo', 'admin')->get();
        $usuariosProvedor = User::where('tipo', 'provedor')->get();
        $provedores = Provedor::all();
    
        $mensagemSucesso = session('mensagemSucesso');
        $usuarioLogado = Auth::user()->nome ?? null;
    
        return view('Components.dashboard.visualisar-provedor', [
            'usuariosAdm' => $usuariosAdm,
            'usuariosProvedor' => $usuariosProvedor,
            'provedores' => $provedores,
            'mensagemSucesso' => $mensagemSucesso,
            'usuarioLogado' => $usuarioLogado
        ]);
    }
    
   
    public function create()
    {
        $usuarioLogado = Auth::user()->nome ?? null;

        return view('Components.dashboard.cadastro-provedor', ['usuarioLogado' => $usuarioLogado]);
    }
    
    public function store(UserGlobalRequest $request)
    {
        $tipo = $request->input('tipoUse');
        $provedor = null;
    
        if ($tipo === 'provedor') {
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
        
        return redirect()->route('dashboard.provedor.index')->with('mensagemSucesso', 'Foi criado com sucesso o provedor');
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

        return view('Components.dashboard.editar-provedor', [
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
    
        // Se o provedor for fornecido, atualizar os detalhes do provedor
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
    
        // Lógica para atualizar a senha 
        if ($request->senha) {
            if (Hash::check($request->senha, $user->senha)) {
                $user->senha = Hash::make($request->nova_senha);
            } else {
                // Senha atual incorreta, lidar com isso de acordo com sua lógica
            }
        }
    
        $user->save();
    
        return redirect()->route('dashboard.provedor.index')->with('mensagemSucesso', "Atualizado com sucesso!");
    }
    
    
    

    public function destroy(string $id)
    {
        $provedor = Provedor::find($id);
        $provedor->delete();
        return redirect()->route('dashboard.provedor.index')->with('mensagemSucesso', "Provedor '$provedor->nome' foi deletado com sucesso.");
    }
}


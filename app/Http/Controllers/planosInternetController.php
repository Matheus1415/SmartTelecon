<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlanosRequest;
use App\Models\Planos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class planosInternetController extends Controller
{

    public function index()
    {
        $usuario = Auth::user();
        $mensagemSucesso = session('mensagemSucesso');
        $usuarioLogado = $usuario->nome;
        $planos = Planos::all();

       return view('Components.dashboard.visualisar-planos', [
            'usuarioLogado' => $usuarioLogado,
            'mensagemSucesso' => $mensagemSucesso,
            'planos' => $planos,
       ]);
    }


    public function create()
    {
        $usuario = Auth::user();
        $usuarioLogado = $usuario->nome;
        return view('Components.dashboard.cadastro-planos', [
            'usuarioLogado' => $usuarioLogado
        ]);
    }

    public function store(PlanosRequest $request)
    {
        if (!Auth::check()) {
            abort(403, 'Acesso não autorizado.');
        }
    
        $novoPlano = [
            'nome' => $request->input('nome'),
            'preco' => $request->input('preco'),
            'tempo_fidelidade_meses' => $request->input('tempo_fidelidade_meses'),
            'taxa_cancelamento' => $request->input('taxaCancelamento'),
            'tipo_conexao' => $request->tipo_conexao,
            'velocidade_download' => $request->input('velocidade_download'),
            'velocidade_upload' => $request->input('velocidadeUpload'),
            'instalacao_inclusa' => $request->instalacao_inclusa ,
            'descricao_geral' => $request->input('descricaoGeral'),
            'disponibilidade_geografica' => $request->input('disponibilidade_geografica'),
            'limite_dados' => $request->input('limite_dados'),
            'equipamentos_fornecidos' => $request->input('equipamentos_fornecidos'),
            'upgrade_downgrade_disponivel' => $request->upgrade_downgrade_disponivel,
            'politica_garantia_velocidade' => $request->input('politica_garantia_velocidade'),
            'ofertas_especiais' => $request->input('ofertas_especiais'),
            'opcoes_pagamento' => $request->input('opcoes_pagamento'),
            'suporte_cliente' => $request->input('suporte_cliente'),
        ];
        Planos::create($novoPlano);
    
        return redirect()->route('dashboard.planos.create')->with('mensagemSucesso', 'Plano de internet cadastrado com sucesso!');
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
        $plano = Planos::find($id);
        $plano->delete();
        return redirect()->route('dashboard.planos.index')->with('mensagemSucesso', 'Plano de internet Deletado com sucesso com sucesso!');

    }
}

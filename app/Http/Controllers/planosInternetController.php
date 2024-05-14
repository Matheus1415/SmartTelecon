<?php

namespace App\Http\Controllers;
use App\Http\Requests\PlanosRequest;
use App\Models\Planos;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class planosInternetController extends Controller
{
    public function index()
    {
        $mensagemSucesso = session('mensagemSucesso');
        $usuarioLogado = Auth::user()->nome;
        $planosUserId = Auth::user()->id;
        $criadoresPlano = Auth::user()->nome;
        
        $planos = Planos::where('planos_user_id', $planosUserId)->get();
    
        return view('Components.dashboard.visualisar-planos', [
            'usuarioLogado' => $usuarioLogado,
            'mensagemSucesso' => $mensagemSucesso,
            'planos' => $planos,
            'criadoresPlano' => $criadoresPlano,
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
    {if (!Auth::check()) {
        abort(403, 'Acesso não autorizado.');
    }
    
    $novoPlano = [
        'planos_user_id' => Auth::user()->id,
        'nome' => $request->input('nome'),
        'preco' => $request->input('preco'),
        'tempo_fidelidade_meses' => $request->input('tempo_fidelidade_meses'),
        'taxa_cancelamento' => $request->input('taxa_cancelamento'), 
        'tipo_conexao' => $request->input('tipo_conexao'),
        'velocidade_download' => $request->input('velocidade_download'),
        'velocidade_upload' => $request->input('velocidadeUpload'),
        'instalacao_inclusa' => $request->input('instalacao_inclusa'), 
        'descricao_geral' => $request->input('descricao_geral'),
        'disponibilidade_geografica' => $request->input('disponibilidade_geografica'),
        'limite_dados' => $request->input('limite_dados'),
        'equipamentos_fornecidos' => $request->input('equipamentos_fornecidos'),
        'upgrade_downgrade_disponivel' => $request->input('upgrade_downgrade_disponivel'),
        'politica_garantia_velocidade' => $request->input('politica_garantia_velocidade'),
        'ofertas_especiais' => $request->input('ofertas_especiais'),
        'opcoes_pagamento' => $request->input('opcoes_pagamento'),
        'suporte_cliente' => $request->input('suporte_cliente'),
    ];
    
    $plano = Planos::create($novoPlano);
    
    return redirect()->route('dashboard.planos.index')->with('mensagemSucesso', 'Plano de internet cadastrado com sucesso!');
    
    }
    

    public function edit($id)
    {
        $plano = Planos::find($id); 
        $usuario = Auth::user();
        $usuarioLogado = $usuario->nome;

    
        return view('Components.dashboard.editar-planos',[
            'usuarioLogado' => $usuarioLogado,
            'plano' => $plano
        ]);
    }
    
    public function update(Request $request, $id)
    {
        $plano = Planos::find($id);
      
        $plano->nome = $request->input('nome');
        $plano->preco = $request->input('preco');
        $plano->tempo_fidelidade_meses = $request->input('tempo_fidelidade_meses');
        $plano->taxa_cancelamento = $request->input('taxaCancelamento');
        $plano->tipo_conexao = $request->tipo_conexao;
        $plano->velocidade_download = $request->input('velocidade_download');
        $plano->velocidade_upload = $request->input('velocidadeUpload');
        $plano->instalacao_inclusa = $request->instalacao_inclusa;
        $plano->descricao_geral = $request->input('descricaoGeral');
        $plano->disponibilidade_geografica = $request->input('disponibilidade_geografica');
        $plano->limite_dados = $request->input('limite_dados');
        $plano->equipamentos_fornecidos = $request->input('equipamentos_fornecidos');
        $plano->upgrade_downgrade_disponivel = $request->upgrade_downgrade_disponivel;
        $plano->politica_garantia_velocidade = $request->input('politica_garantia_velocidade');
        $plano->ofertas_especiais = $request->input('ofertas_especiais');
        $plano->opcoes_pagamento = $request->input('opcoes_pagamento');
        $plano->suporte_cliente = $request->input('suporte_cliente');
        $plano->save();
        
    
        // Redireciona de volta para a página de lista de planos com uma mensagem de sucesso
        return redirect()->route('dashboard.planos.index')->with('mensagemSucesso', 'Plano atualizado com sucesso!');
    }
    
    public function destroy(string $id)
    {
        $plano = Planos::find($id);
        $plano->delete();
        return redirect()->route('dashboard.planos.index')->with('mensagemSucesso', 'Plano de internet Deletado com sucesso com sucesso!');

    }
}

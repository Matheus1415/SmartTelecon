<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/painel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">    
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <title>Visualizar Planos de Internet</title>
</head>
<body>
    <x-dashboard.menu/>
    <section class="body">
        <x-dashboard.header-bord descricao="Visualizar Provedor" usuarioLogado="{{$usuarioLogado}}"/>
        @isset($mensagemSucesso)
            <div class="sucesso">
                {{ $mensagemSucesso }}
            </div>
        @endisset
        <div class="provedor__container">
            <div class="container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome do Plano</th>
                            <th>Preço</th>
                            <th>Tempo de Fidelidade (meses)</th>
                            <th>Taxa de Cancelamento</th>
                            <th>Tipo de Conexão</th>
                            <th>Velocidade de Download</th>
                            <th>Velocidade de Upload</th>
                            <th>Instalação Inclusa</th>
                            <th>Descrição Geral</th>
                            <th>Disponibilidade Geográfica</th>
                            <th>Limite de Dados</th>
                            <th>Equipamentos Fornecidos</th>
                            <th>Upgrade/Downgrade Disponível</th>
                            <th>Política de Garantia de Velocidade</th>
                            <th>Ofertas Especiais</th>
                            <th>Opções de Pagamento</th>
                            <th>Suporte ao Cliente</th>
                            <th>Editar</th>
                            <th>Deletar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($planos as $plano)
                            <td>{{$plano->id}}</td>
                            <td>{{$plano->bome}}</td>
                            <td>{{$plano->preco}}</td>
                            <td>{{$plano->tempo_fidelidade_meses}}</td>
                            <td>{{$plano->taxa_cancelamento}}</td>
                            <td>{{$plano->tipo_conexao}}</td>
                            <td>{{$plano->velocidade_download}}</td>
                            <td>{{$plano->velocidade_upload}}</td>
                            <td>{{$plano->instalacao_inclusa}}</td>
                            <td>{{$plano->descricao_geral}}</td>
                            <td>{{$plano->disponibilidade_geografica}}</td>
                            <td>{{$plano->limite_dados}}</td>
                            <td>{{$plano->equipamentos_fornecidos}}</td>
                            <td>{{$plano->upgrade_downgrade_disponivel}}</td>
                            <td>{{$plano->politica_garantia_velocidade}}</td>
                            <td>{{$plano->ofertas_especiais}}</td>
                            <td>{{$plano->opcoes_pagamento}}</td>
                            <td>{{$plano->suporte_cliente}}</td>
                            <td>
                                <a href="" id="editar">Editar</a>
                            </td>
                            <td>
                                <form action="{{route('dashboard.planos.destroy',$plano->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" id="deletar">Deletar</button>
                                </form>
                            </td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </section>
    <script src="{{asset('js/painelHome.js')}}"></script>
</body>
</html>

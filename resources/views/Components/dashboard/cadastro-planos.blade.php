<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/painel.css') }}">
        <link rel="stylesheet" href="{{ asset('css/reset.css') }}">    
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
        <title>Cadastro provedor</title>
    </head>
<body>
    <x-dashboard.menu/>

    <section class="body">
        <x-dashboard.header-bord descricao="Cadastro de Provedor" usuarioLogado="{{$usuarioLogado}}"/>
        @if ($errors->any())
            <div class="erro">
                @foreach ($errors->all() as $erro)
                    {{$erro}}
                @endforeach
                <div class="closeNotificacao btnErro">X</div>
            </div>

        @endif


        <form action="{{route('dashboard.planos.store')}}" method="POST" id="cadastroPlano">
            @csrf
            <h1>Cadastrar Plano de Internet</h1>
        
            <div class="form__single">
                <div class="form__section">
                    <div class="form__wraper">
                        <label for="nome">Nome do Plano</label>
                        <input type="text" id="nome" name="nome" value="{{ old('nome') }}">
                    </div>
                    <div class="form__wraper">
                        <label for="preco">Preço</label>
                        <input type="text" id="preco" name="preco" value="{{ old('preco') }}">
                    </div>
                    <div class="form__wraper">
                        <label for="tempo_fidelidade_meses">Tempo de Fidelidade (meses)</label>
                        <input type="number" id="tempo_fidelidade_meses" name="tempo_fidelidade_meses" value="{{ old('tempo_fidelidade_meses') }}" min="1">
                    </div>
                    <div class="form__wraper">
                        <label for="taxaCancelamento">Taxa de Cancelamento</label>
                        <input type="text" id="taxaCancelamento" name="taxaCancelamento" value="{{ old('taxaCancelamento') }}">
                    </div>

                </div>

                <div class="form__section">
                    <div class="form__wraper">
                        <label for="velocidade_download">Velocidade de Download</label>
                        <input type="text" id="velocidade_download" name="velocidade_download" value="{{ old('velocidade_download') }}">
                    </div>
                    <div class="form__wraper">
                        <label for="velocidadeUpload">Velocidade de Upload</label>
                        <input type="text" id="velocidadeUpload" name="velocidadeUpload" value="{{ old('velocidadeUpload') }}">
                    </div>

                    <div class="form__wraper">
                        <label for="instalacao_inclusa">Instalação Inclusa</label>
                        <select name="instalacao_inclusa" id="instalacao_inclusa">
                            <option value="sim">sim</option>
                            <option value="nao">não</option>
                        </select>
                    </div>

                    <div class="form__wraper">
                        <label for="tipo_conexao">Tipo de Conexão</label>
                        <select name="tipo_conexao" id="tipo_conexao">
                            <option value="fibra">Fibra Óptica</option>
                            <option value="cobre">Fios de Cobre</option>
                        </select>
                    </div>
                    
                </div>
                <div class="form__section">                    
                    <div class="form__wraper">
                        <label for="disponibilidade_geografica">Disponibilidade Geografica</label>
                        <input type="text" id="disponibilidade_geografica" name="disponibilidade_geografica" value="{{ old('disponibilidade_geografica') }}">
                    </div>
                    <div class="form__wraper">
                        <label for="limite_dados">Limite de Dados</label>
                        <input type="text" id="limite_dados" name="limite_dados" value="{{ old('limite_dados') }}">
                    </div>
                    <div class="form__wraper">
                        <label for="upgrade_downgrade_disponivel">Upgrade Downgrade Disponível</label>
                        <select name="upgrade_downgrade_disponivel" id="upgrade_downgrade_disponivel">
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form__single">
                <div class="form__section">                    
                    <div class="form__wraper">
                        <label for="descricaoGeral">Descrição Geral</label>
                        <textarea id="descricaoGeral" name="descricaoGeral">{{ old('descricaoGeral') }}</textarea>
                    </div>
                    <div class="form__wraper">
                        <label for="equipamentos_fornecidos">Equipamentos Fornecidos</label>
                        <textarea id="equipamentos_fornecidos" name="equipamentos_fornecidos">{{ old('equipamentos_fornecidos') }}</textarea>
                    </div>
                </div>
                <div class="form__section">                    

                    <div class="form__wraper">
                        <label for="opcoes_pagamento">Opcoes Pagamento</label>
                        <textarea id="opcoes_pagamento" name="opcoes_pagamento">{{ old('opcoes_pagamento') }}</textarea>
                    </div>
                    <div class="form__wraper">
                        <label for="politica_garantia_velocidade">Politica Garantia Velocidade</label>
                        <textarea id="politica_garantia_velocidade" name="politica_garantia_velocidade">{{ old('politica_garantia_velocidade') }}</textarea>
                    </div>

                </div>
                
                <div class="form__section">
                    <div class="form__wraper">
                        <label for="suporte_cliente">Suporte Cliente</label>
                        <textarea id="suporte_cliente" name="suporte_cliente">{{ old('suporte_cliente') }}</textarea>
                    </div>
                    <div class="form__wraper">
                        <label for="ofertas_especiais">dfertas especiais</label>
                        <textarea id="ofertas_especiais" name="ofertas_especiais">{{ old('ofertas_especiais') }}</textarea>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <button type="submit" class="btnSubmit">Cadastrar</button>
        </form>        
    </section>
    <script src="{{asset('js/painelHome.js')}}"></script>
    <script src="{{asset('js/erro.js')}}"></script>
</body>
</html>
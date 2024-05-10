<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/painel.css') }}">
        <link rel="stylesheet" href="{{ asset('css/reset.css') }}">    
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
        <title>Editar provedor</title>
    </head>
<body>
    <x-dashboard.menu/>

    <x-dashboard.header-bord descricao="Editar de Provedor" usuarioLogado="{{$usuarioLogado}}"/>
    @if ($errors->any())
        <div class="erro">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if ($provedor)
        <form action="{{ route('dashboard.provedor.update', ['idUsuario' => $user->id, 'idProvedor' => $provedor->id]) }}" method="POST" id="cadastro">
    @else
        <form action="{{ route('dashboard.provedor.update', ['idUsuario' => $user->id]) }}" method="POST" id="cadastro">
    @endif
    @method('PUT')
        @csrf
        <h1>Faça seu Cadastro</h1>

        <div class="form__single">
            <div class="form__section userDados">
                <div class="form__wraper">
                    <label for="tipoUse">Tipo de usuário</label>
                    <select name="tipoUse" id="tipoUse">
                        <option 
                            value="admin" 
                            @if ($provedor != null)
                                disabled                              
                            @else
                                selected
                            @endif
                        >Admin</option>
                        <option 
                            value="provedor"
                            @if ($provedor == null)
                                disabled
                            @endif
                        >Provedor</option>
                    </select>
                </div>
                <div class="form__wraper">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" value="{{ $user->nome }}">
                </div>

                <div class="form__wraper">
                    <label for="telefone">Telefone:</label>
                    <input type="text" id="telefone" name="telefone" value="{{ $user->telefone }}">
                </div>
            </div>
            @if ($provedor !== null)
                <div class="form__section endereco">
                    <div class="form__wraper ">
                        <label for="endereco">Endereço Atual:</label>
                        <input type="text" id="endereco" name="endereco" value="{{ $provedor->endereco }}">
                    </div>
                    <div class="form__wraper">
                        <label for="cidade">Cidade alocada:</label>
                        <input type="text" id="cidade" name="cidade" value="{{ $provedor->cidade }}">
                    </div>
                    <div class="form__wraper">
                        <label for="estado">Estado Residente:</label>
                        <input type="text" id="estado" name="estado" value="{{ $provedor->estado }}">
                    </div>
                    <div class="form__wraper">
                        <label for="cep">CEP:</label>
                        <input type="text" id="cep" name="cep" value="{{ $provedor->cep }}">
                    </div>
                </div>
            @endif
            <div class="form__section senha">
                @if ($provedor !== null)
                    <div class="form__wraper">
                        <label for="empresa">Nome da Empresa</label>
                        <input type="text" id="empresa" name="empresa" value="{{ $provedor->empresa }}">
                    </div>
                    <div class="form__wraper">
                        <label for="cnpj">CNPJ da Empresa:</label>
                        <input type="text" id="cnpj" name="cnpj" value="{{ $provedor->cnpj }}">
                    </div> 
                @endif
                <div class="form__wraper">
                    <label for="senha">Senha Atual</label>
                    <div class="form__wraper__senha">
                        <input type="password" id="senha" name="senha">
                        <i class="ri-eye-line" id="senhaIco"></i>
                    </div>
                </div>
                <div class="form__wraper">
                    <label for="senhaConfirmada">Nova Senha</label>
                    <div class="form__wraper__senha">
                        <input type="password" id="senhaConfirmada" name="senhaConfirmada">
                        <i class="ri-eye-line" id="senhaConfirmadaIco"></i>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" id="btnCadastroProvedor">Cadastrar</button>
    </form>

    <script src="{{ asset('js/formValidacao.js') }}"></script>
    <script src="{{asset('js/erro.js')}}"></script>
</body>
</html>
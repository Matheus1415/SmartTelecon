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
                <ul>
                    @foreach ($errors->all() as $erro)
                        <li>{{ $erro }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ route('dashboard.usuario.update', $usuario->id) }}" method="POST" id="cadastro">
            @csrf
            @method('PUT')
            <h1>Editando o usúario <span class="userTitle">{{$usuario->nome}}</span></h1>

            <div class="form__single">
                <div class="form__section userDados">
                    <div class="form__wraper">
                        <label for="tipoUse">Tipo de usuário</label>
                        <select name="tipoUse" id="tipoUse">
                            @if($usuario->tipo === 'admin')
                                <option value="admin" selected>Admin</option>
                            @else
                                <option value="provedor" selected>Provedor</option> 
                            @endif
                        </select>
                    </div>
                    <div class="form__wraper">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" value="{{ $usuario->nome}}">
                    </div>
                    <div class="form__wraper">
                        <label for="email">E-mail:</label>
                        <input type="email" id="email" name="email" value="{{ $usuario->email }}">
                    </div>
                    <div class="form__wraper">
                        <label for="telefone">Telefone:</label>
                        <input type="text" id="telefone" name="telefone" value="{{ $usuario->telefone }}">
                    </div>
                </div>
                @if ($usuario->tipo === 'provedor')
                <div class="form__section endereco">
                    <div class="form__wraper ">
                        <label for="endereco">Endereço Atual:</label>
                        <input type="text" id="endereco" name="endereco" value="{{ $usuario->endereco }}">
                    </div>
                    <div class="form__wraper">
                        <label for="cidade">Cidade alocada:</label>
                        <input type="text" id="cidade" name="cidade" value="{{ $usuario->cidade }}">
                    </div>
                    <div class="form__wraper">
                        <label for="estado">Estado Residente:</label>
                        <input type="text" id="estado" name="estado" value="{{ $usuario->estado }}">
                    </div>
                    <div class="form__wraper">
                        <label for="cep">CEP:</label>
                        <input type="text" id="cep" name="cep" value="{{ $usuario->cep }}">
                    </div>
                </div>
                @endif
                <div class="form__section senha">
                    @if($usuario->tipo === 'provedor')
                        <div class="form__wraper">
                            <label for="empresa">Nome da Empresa</label>
                            <input type="text" id="empresa" name="empresa" value="{{ $usuario->empresa }}">
                        </div>
                        <div class="form__wraper">
                            <label for="cnpj">CNPJ da Empresa:</label>
                            <input type="text" id="cnpj" name="cnpj" value="{{ $usuario->cnpj }}">
                        </div>
                    @endif
                    <div class="form__wraper">
                        <label for="senha">Senha de login:</label>
                        <div class="form__wraper__senha">
                            <input type="password" id="senha" name="senha">
                            <i class="ri-eye-line" id="senhaIco"></i>
                        </div>
                    </div>
                    <div class="form__wraper">
                        <label for="senhaConfirmada">Confirme a senha de login:</label>
                        <div class="form__wraper__senha">
                            <input type="password" id="senhaConfirmada" name="senhaConfirmada">
                            <i class="ri-eye-line" id="senhaConfirmadaIco"></i>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btnSubmit">Cadastrar</button>
        </form>
    </section>
    <script src="{{ asset('js/formValidacao.js') }}"></script>
    <script src="{{asset('js/erro.js')}}"></script>
</body>
</html>

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

    <x-dashboard.header-bord descricao="Editar de Provedor"/>
    @if ($errors->any())
        <div class="erro">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    
    <form action="{{route('dashboard.provedor.update',$provedor)}}" method="POST" id="cadastro">
        @csrf
        @method('PUT')
        <div class="form__single">
            <div class="form__section userDados">
                <div class="form__wraper">
                    <label for="nome">Nome da Empresa:</label>
                    <input 
                        type="text" 
                        id="nome" 
                        name="nome" 
                        value="{{ $provedor->nome}}"
                    >
                </div>
                <div class="form__wraper">
                    <label for="email">E-mail:</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        value="{{ $provedor->email}}"
                    >
                </div>
                <div class="form__wraper">
                    <label for="cnpj">CNPJ da Empresa:</label>
                    <input 
                        type="text" 
                        id="cnpj" 
                        name="cnpj" 
                        value="{{ $provedor->cnpj}}"
                        max="19"
                    >
                </div>
                <div class="form__wraper">
                    <label for="telefone">Telefone:</label>
                    <input 
                        type="text" 
                        id="telefone" 
                        name="telefone"
                        value="{{ $provedor->telefone }}"
                    >
                </div>
            </div>

            <div class="form__section endereco">
                <div class="form__wraper ">
                    <label for="endereco">Endereço Atual:</label>
                    <input 
                        type="text" 
                        id="endereco" 
                        name="endereco"
                        value="{{ $provedor->endereco }}"
                    >
                </div>
                <div class="form__wraper">
                    <label for="cidade">Cidade alocada:</label>
                    <input 
                        type="text" 
                        id="cidade" 
                        name="cidade"
                        value="{{ $provedor->cidade }}"
                    >
                </div>
                <div class="form__wraper">
                    <label for="estado">Estado Residete:</label>
                    <input 
                        type="text" 
                        id="estado" 
                        name="estado"
                        value="{{ $provedor->estado}}"
                    >
                </div>
                <div class="form__wraper">
                    <label for="cep">CEP:</label>
                    <input 
                        type="text" 
                        id="cep" 
                        name="cep"
                        value="{{ $provedor->cep }}"
                    >
                </div>
            </div>
            <div class="form__section senha">
                <div class="form__wraper">
                    <label for="senha">Senha de login:</label>
                    <div class="form__wraper__senha">
                        <input
                            type="password"
                            id="senha"
                            name="senha"
                            value="{{ $provedor->senha }}"
                        >
                        <i class="ri-eye-line" id="senhaIco"></i>
                    </div>
                </div>
                <div class="form__wraper">
                    <label for="senhaConfirmada">Confirma senha de login:</label>
                    <div class="form__wraper__senha">
                        <input
                            type="password"
                            id="senhaConfirmada"
                            name="senhaConfirmada"
                            value="{{ $provedor->senha }}"
                        >
                        <i class="ri-eye-line" id="senhaConfirmadaIco"></i>
                    </div>
                </div>
            </div>
        </div>

        </div>

        <button type="submit" id="btnCadastroProvedor">Cadastrar</button>
    </form>

    <script src="{{ asset('js/formValidacao.js') }}"></script>
</body>
</html>
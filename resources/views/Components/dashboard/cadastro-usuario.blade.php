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
        <x-dashboard.header-bord descricao="Cadastro de Usúario" usuarioLogado="{{$usuarioLogado}}"/>
        @if ($errors->any())
            <div class="erro">
                <ul>
                    @foreach ($errors->all() as $erro)
                        <li>{{ $erro }}</li>
                    @endforeach
                </ul>
                <div class="closeNotificacao">X</div>
            </div>
        @endif
        
        <form action="{{ route('lendPage.store') }}" method="POST" id="cadastro">
            @csrf
            <h1>Crie um novo usúario</h1>

            <div class="form__single">
                <div class="form__section userDados">
                    <div class="form__wraper">
                        <label for="tipoUse">Tipo de usuário<span class="obrigatorio">*</span></label>
                        <select name="tipoUse" id="tipoUse">
                            <option value="admin" selected>Admin</option>
                            <option value="provedor">Provedor</option>
                        </select>
                    </div>
                    <div class="form__wraper">
                        <label for="nome">Nome <span class="obrigatorio">*</span></label>
                        <input type="text" id="nome" name="nome" value="{{ old('nome') }}" placeholder="Digite seu nome">
                    </div>
                    <div class="form__wraper">
                        <label for="email">E-mail:<span class="obrigatorio">*</span></label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="ex:. exemplo@gmail.com">
                    </div>
                    <div class="form__wraper">
                        <label for="telefone">Telefone:<span class="obrigatorio">*</span></label>
                        <input type="text" id="telefone" name="telefone" value="{{ old('telefone') }}" placeholder="Ex:. (85) 99999-9999">
                    </div>
                </div>
                <div class="form__section endereco">
                    <div class="form__wraper ">
                        <label for="endereco">Endereço Atual:<span class="obrigatorio">*</span></label>
                        <input type="text" id="endereco" name="endereco" value="{{ old('endereco') }}" placeholder="Ex:. Rua Esmeros Sousa , 12">
                    </div>
                    <div class="form__wraper">
                        <label for="cidade">Cidade alocada:<span class="obrigatorio">*</span></label>
                        <input type="text" id="cidade" name="cidade" value="{{ old('cidade') }}" placeholder="Digite sua localidade">
                    </div>
                    <div class="form__wraper">
                        <label for="estado">Estado Residente:<span class="obrigatorio">*</span></label>
                        <input type="text" id="estado" name="estado" value="{{ old('estado') }}" placeholder="Digite o estado residente">
                    </div>
                    <div class="form__wraper">
                        <label for="cep">CEP:<span class="obrigatorio">*</span></label>
                        <input type="text" id="cep" name="cep" value="{{ old('cep') }}" placeholder="Digite o cep da sua localidade">
                    </div>
                </div>
                <div class="form__section senha">
                    <div class="form__wraper">
                        <label for="empresa">Nome da Empresa:<span class="obrigatorio">*</span></label>
                        <input type="text" id="empresa" name="empresa" value="{{ old('empresa') }}" placeholder="Digite o nome da empresa">
                    </div>
                    <div class="form__wraper">
                        <label for="cnpj">CNPJ da Empresa:<span class="obrigatorio">*</span></label>
                        <input type="text" id="cnpj" name="cnpj" value="{{ old('cnpj') }}" placeholder="Ex:. 00.000.000/0000-00">
                    </div>
                    <div class="form__wraper">
                        <label for="senha">Senha de login:<span class="obrigatorio">*</span></label>
                        <div class="form__wraper__senha">
                            <input type="password" id="senha" name="senha">
                            <i class="ri-eye-line" id="senhaIco"></i>
                        </div>
                    </div>
                    <div class="form__wraper">
                        <label for="senhaConfirmada">Confirme a senha de login:<span class="obrigatorio">*</span></label>
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
    <script src="{{asset('js/painelHome.js')}}"></script>
    <script src="{{ asset('js/formValidacao.js') }}"></script>
    <script src="{{asset('js/erro.js')}}"></script>
</body>
</html>
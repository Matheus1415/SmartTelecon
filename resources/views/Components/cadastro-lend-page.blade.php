<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro do usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/lendPage.css') }}">
</head>
<body>
    <section class="cadastro">
        <div class="container">
            @if ($errors->any())
                <div class="erro">
                    <ul>
                        @foreach ($errors->all() as $erro)
                            <li>{{ $erro }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form action="{{ route('lendPage.store') }}" method="POST" id="cadastro">
                @csrf
                <div class="form__single">
                    <div class="form__section userDados">
                        <div class="form__wraper">
                            <label for="tipoUser">Tipo de usuário</label>
                            <select name="tipoUser" id="tipoUser">
                                <option value="admin">Admin</option>
                                <option value="provedor">Provedor</option>
                            </select>
                        </div>
                        <div class="form__wraper">
                            <label for="nome">Nome</label>
                            <input type="text" id="nome" name="nome" value="{{ old('nome') }}">
                        </div>
                        <div class="form__wraper">
                            <label for="email">E-mail:</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}">
                        </div>
                        <div class="form__wraper">
                            <label for="telefone">Telefone:</label>
                            <input type="text" id="telefone" name="telefone" value="{{ old('telefone') }}">
                        </div>
                    </div>
                    <div class="form__section endereco">
                        <div class="form__wraper ">
                            <label for="endereco">Endereço Atual:</label>
                            <input type="text" id="endereco" name="endereco" value="{{ old('endereco') }}">
                        </div>
                        <div class="form__wraper">
                            <label for="cidade">Cidade alocada:</label>
                            <input type="text" id="cidade" name="cidade" value="{{ old('cidade') }}">
                        </div>
                        <div class="form__wraper">
                            <label for="estado">Estado Residente:</label>
                            <input type="text" id="estado" name="estado" value="{{ old('estado') }}">
                        </div>
                        <div class="form__wraper">
                            <label for="cep">CEP:</label>
                            <input type="text" id="cep" name="cep" value="{{ old('cep') }}">
                        </div>
                    </div>
                    <div class="form__section senha">
                        <div class="form__wraper">
                            <label for="empresa">Nome da Empresa</label>
                            <input type="text" id="empresa" name="empresa" value="{{ old('empresa') }}">
                        </div>
                        <div class="form__wraper">
                            <label for="cnpj">CNPJ da Empresa:</label>
                            <input type="text" id="cnpj" name="cnpj" value="{{ old('cnpj') }}">
                        </div>
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
                <button type="submit" id="btnCadastroProvedor">Cadastrar</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="footer-container">
            <div class="footer-col">
                <h3>Links Úteis</h3>
                <ul>
                    <li><a href="#">Página Inicial</a></li>
                    <li><a href="#">Sobre Nós</a></li>
                    <li><a href="#">Produtos</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h3>Contato</h3>
                <p>Endereço: 123 Rua Principal, Cidade</p>
                <p>Telefone: (123) 456-7890</p>
                <p>Email: info@example.com</p>
            </div>
            <div class="footer-col">
                <h3>Inscreva-se</h3>
                <form action="#">
                    <input type="email" placeholder="Digite seu email">
                    <button type="submit">Inscrever</button>
                </form>
            </div>
        </div>
    </footer>
    <div class="footer__single">
        Direitos reservados a ₢Matheus Pereira
    </div>
    <script src="{{ asset('js/formValidacao.js') }}"></script>
</body>
</html>

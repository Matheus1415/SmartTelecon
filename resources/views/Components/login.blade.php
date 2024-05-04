<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro do usúario</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('css/lendPage.css')}}">

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
            
            <form action="" method="POST" id="cadastro">
                @csrf
                <div class="form__single">

                    <div class="form__section userDados">
                        <div class="form__wraper">
                            <label for="nome">Nome</label>
                            <input
                                type="text"
                                id="nome"
                                name="nome"
                                value="{{ old('nome') }}"
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
                                    value="{{ old('senha')}}"
                                >
                                <i class="ri-eye-line" id="senhaIco"></i>
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



</body>
</html>
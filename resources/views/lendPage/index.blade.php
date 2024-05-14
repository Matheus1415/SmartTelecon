<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('css/lendPage.css')}}">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="preconnect" href="{{asset('https://fonts.googleapis.com')}}">
    <link rel="preconnect" href="{{asset('https://fonts.gstatic.com')}}" crossorigin>
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Lend Page</title> 
</head>
<body>
    <div class="overlay" id="overlay"></div>
    <header class="header">
        <div class="container">
            <div class="container__nav">
                <div class="header__logo">
                    <h1>Lend Page</h1>
                </div>
                <nav class="desk">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#sobre" class="nav__link">Home</a></li>
                        <li class="nav__item"><a href="#sobre" class="nav__link">Sobre</a></li>
                        <li class="nav__item"><a href="#servico" class="nav__link">Serviços Oferecidos</a></li>
                        <li class="nav__item"><a href="{{route('lendPage.create')}}" class="cadatro">Cadastro</a></li>
                        <li class="nav__item"><a href="{{route('login.index')}}" class="login">Login</a></li>
                    </ul>
                </nav>
                <span class="material-symbols-outlined" id="menu">menu</span>
                <nav class="mobile">
                    <ul class="nav__list-mobile" id="itemMenu">
                        <li class="nav__item-mobile"><a href="#sobre" class="nav__link">Home</a></li>
                        <li class="nav__item-mobile"><a href="#sobre" class="nav__link">Sobre</a></li>
                        <li class="nav__item-mobile"><a href="#servico" class="nav__link">Serviços Oferecidos</a></li>
                    </ul>
                </nav>
            </div>
            <div class="cta">
                <h2 class="cta__title">Precisa de Consultoria em Telecomunicações?</h2>
                <p class="cta__description">Descubra como podemos otimizar seus serviços de telecomunicações com uma avaliação gratuita. Aproveite esta oportunidade exclusiva para receber insights valiosos sobre como melhorar a eficiência e a qualidade dos seus serviços. Agende sua avaliação agora mesmo e dê o primeiro passo para alcançar o sucesso em sua empresa de telecomunicações!</p>
                <a href="#" class="cta__button">Entre em Contato</a>
            </div>            
        </div>
    </header>

    @if ($errors->any())
    <div class="erro">
        <ul>
            @foreach ($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    </div>
@endif

<section class="sobre" id="sobre">

    <h1 class="titulo">Conheça a Empresa</h1>

    <div class="container">
        <x-sobre title="Experiência"  descricao="Contamos com uma equipe de profissionais altamente qualificados e experientes no setor de telecomunicações." />

        <x-sobre title="Soluções Personalizadas"  descricao="Desenvolvemos soluções sob medida para atender às necessidades específicas de cada cliente, garantindo resultados eficazes." />

        <x-sobre title="Parceria" descricao="Valorizamos a parceria com nossos clientes e trabalhamos em conjunto para alcançar o sucesso mútuo." />

        <x-sobre title="Valores" descricao="Valorizamos a parceria com nossos clientes e trabalhamos em conjunto para alcançar o sucesso mútuo." />
        
        <x-sobre title="Missão" descricao="Valorizamos a parceria com nossos clientes e trabalhamos em conjunto para alcançar o sucesso mútuo." />

        <x-sobre title="Artigos" descricao="Valorizamos a parceria com nossos clientes e trabalhamos em conjunto para alcançar o sucesso mútuo." />

    </div>
</section>

<section class="servico" id="servico">
    <h1 class="titulo">Serviços Ofertados</h1>
    <div class="container">
        @foreach ($planos as $plano)
            <x-servico :plano="$plano" />
        @endforeach
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

<script src="{{asset('js/lendPage.js')}}"></script>

</body>
</html>

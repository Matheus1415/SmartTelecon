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
                        <li class="nav__item"><a href="#suport" class="nav__link">suport</a></li>
                        <li class="nav__item"><a href="#servico" class="nav__link">Serviços Oferecidos</a></li>
                        <li class="nav__item"><a href="{{route('lendPage.create')}}" class="cadatro">Cadastro</a></li>
                        <li class="nav__item"><a href="{{route('login')}}" class="login">Login</a></li>
                    </ul>
                </nav>
                <i class="ri-menu-line"id="menu"></i>
                <nav class="mobile">
                    <ul class="nav__list-mobile" id="itemMenu">
                        <li class="nav__item-mobile"><a href="#sobre" class="nav__link">Home</a></li>
                        <li class="nav__item-mobile"><a href="#sobre" class="nav__link">Sobre</a></li>
                        <li class="nav__item"><a href="#suport" class="nav__link">suport</a></li>
                        <li class="nav__item-mobile"><a href="#servico" class="nav__link">Serviços Oferecidos</a></li>
                        <li class="nav__item-mobile"><a href="{{route('lendPage.create')}}" class="cadatro_mobile">Cadastro</a></li>
                        <li class="nav__item-mobile"><a href="{{route('login')}}" class="login_mobile">Login</a></li>
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

<section class="box" id="sobre">
    <div class="container">
        <div class="box__single">
            <span><i class="ri-book-read-line"></i></span>
            <h2>Explore Nossos Artigos</h2>
            <p>Descubra insights e informações valiosas em nossos artigos exclusivos. Mantenha-se atualizado com as últimas tendências e novidades do setor.</p>
            <a href="">Leia Agora <strong>></strong></a>
        </div>
        <div class="box__single">
            <span><i class="ri-shake-hands-fill"></i></span>
            <h2>Nossos Parceiros</h2>
            <p>Saiba mais sobre as parcerias que fortalecem nosso ecossistema e nos permitem oferecer soluções de alta qualidade.</p>
            <a href="">Descubra Mais <strong>></strong></a>
        </div>
        <div class="box__single">
            <span><i class="ri-user-smile-line"></i></span>
            <h2>Depoimentos de Clientes</h2>
            <p>Veja o que nossos clientes têm a dizer sobre nossas soluções. A satisfação deles é o nosso maior compromisso.</p>
            <a href="">Veja Depoimentos <strong>></strong></a>
        </div>
        <div class="box__single">
            <span><i class="ri-map-fill"></i></span>
            <h2>Veja Soluções</h2>
            <p>Entenda como nossas soluções podem ajudar a transformar seu negócio. Inovação e eficiência ao seu alcance.</p>
            <a href="">Saiba Mais <strong>></strong></a>
        </div>
    </div>
    
</section>

<section class="suport" id="suport">
    <div class="container">
        <img src="../imagem/suport-smart.png" alt="">
        <div class="suport__container">
            <h1>Modernidade e Inovação</h1>
            <p>Na nossa empresa, a modernidade não é apenas uma palavra – é uma filosofia. Trabalhamos incessantemente para garantir que você tenha acesso às tecnologias mais avançadas e aos serviços mais eficientes. Junte-se a nós e experimente um mundo onde a conectividade e a inovação se encontram.</p>
            
            <div class="suport_container_single">
                <span><i class="ri-flashlight-line"></i></span>
                <div class="suport_container_warper">
                    <h3>Velocidade Imbatível</h3>
                    <p>Desfrute de velocidades de internet que permitem streaming, jogos e downloads sem interrupções. </p>
                </div>
            </div>
            
            <div class="suport_container_single">
                <span><i class="ri-shield-keyhole-line"></i></span>
                <div class="suport_container_warper">
                    <h3>Segurança de Primeira</h3>
                    <p>Mantenha seus dados protegidos com nossas soluções avançadas de segurança digital.</p>
                </div>
            </div>
            
            <div class="suport_container_single">
                <span><i class="ri-customer-service-2-line"></i></span>
                <div class="suport_container_warper">
                    <h3>Suporte Especializado</h3>
                    <p>Nosso suporte técnico está disponível 24/7 para resolver qualquer problema que você possa enfrentar.</p>
                </div>
            </div>
        </div>
        
    </div>
</section>

<section class="servico" id="servico">
    <h1 class="titulo">Planos de Internet Ofertados</h1>
    <div class="container">
        @foreach ($planos as $plano)
            <x-servico :plano="$plano"/>
        @endforeach
    </div>
</section>

<footer>
    <div class="footer-cta">
        <h1>Torne sua atividades mais rapidas <br>Com os melhores planos do mercado</h1>
        <a href="#">Venha conhecer Mais </a>
    </div>
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

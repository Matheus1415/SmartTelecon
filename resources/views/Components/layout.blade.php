<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/lendPage.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <title>{{ $title }}</title> 
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="container__nav">
                <div class="header__logo">
                    <h1>{{ $title }}</h1>
                </div>
                <nav class="nav">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#sobre" class="nav__link">Sobre</a></li>
                        <li class="nav__item"><a href="#servico" class="nav__link">Serviços Oferecidos</a></li>
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

    <section class="sobre" id="sobre">
            <div class="title">
                <h1>Conheça nossa empresa</h1>
                <div class="title__line"></div>
            </div>
        <div class="container">
            <div class="sobre__single">
                <h3 class="sobre__single-title">Experiência <i class="ri-customer-service-line"></i></h3>
                <p class="sobre__single-description">Contamos com uma equipe de profissionais altamente qualificados e experientes no setor de telecomunicações.</p>
            </div>
            <div class="sobre__single">
                <h3 class="sobre__single-title">Soluções Personalizadas <i class="ri-pencil-line"></i></h3>
                <p class="sobre__single-description">Desenvolvemos soluções sob medida para atender às necessidades específicas de cada cliente, garantindo resultados eficazes.</p>
            </div>
            <div class="sobre__single">
                <h3 class="sobre__single-title">Parceria <i class="ri-team-fill"></i></h3>
                <p class="sobre__single-description">Valorizamos a parceria com nossos clientes e trabalhamos em conjunto para alcançar o sucesso mútuo.</p>
            </div>
    </section>

    <section class="servico" id="servico">
        <div class="title">
            <h1>Saiba sobre os nosso serviços</h1>
            <div class="title__line"></div>
        </div>
        <div class="container">
            <div class="servico__single">
                <h1>Titulo</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <span>Por apenas <strong>200R$</strong> </span>
                <a href="">Comprar</a>
            </div>
            <div class="servico__single">
                <h1>Titulo</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <span>Por apenas <strong>200R$</strong> </span>
                <a href="">Comprar</a>
            </div>
            <div class="servico__single">
                <h1>Titulo</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <span>Por apenas <strong>200R$</strong> </span>
                <a href="">Comprar</a>
            </div>
            <div class="servico__single">
                <h1>Titulo</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <span>Por apenas <strong>200R$</strong> </span>
                <a href="">Comprar</a>
            </div>
            <div class="servico__single">
                <h1>Titulo</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <span>Por apenas <strong>200R$</strong> </span>
                <a href="">Comprar</a>
            </div>
            <div class="servico__single">
                <h1>Titulo</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <span>Por apenas <strong>200R$</strong> </span>
                <a href="">Comprar</a>
            </div>
        </div>
    </section>
    
    {{ $slot }}
</body>
</html>

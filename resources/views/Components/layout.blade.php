<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/lendPage.css">
    <link rel="stylesheet" href="css/reset.css">
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
                        <li class="nav__item"><a href="#sobre" class="nav__link">Home</a></li>
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


    
    {{ $slot }}
    <script src="js/lendPage.js"></script>
</body>
</html>

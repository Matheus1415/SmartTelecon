<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/lendPage.css">
    <title>{{ $title }}</title> 
</head>
<body>
    <header>
        <div class="container">
            <div class="header-logo">
                <h1>{{ $title }}</h1>
            </div>
            <nav class="desck">
                <ul>
                    <li><a href="#about">Sobre</a></li>
                    <li><a href="#services">Serviços Oferecidos</a></li>
                    <li><a href="#mission">Missão</a></li>
                    <li><a href="#vision">Visão</a></li>
                    <li><a href="#values">Valores</a></li>
                </ul>
            </nav>
        </div>
    </header>
    {{ $slot }}
    
</body>
</html>

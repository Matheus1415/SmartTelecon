<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/painel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">    
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <title>DasheBord</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="nav">
                <div class="logo">
                    <img src="/assets/imagem/adicionais/Fun Kids.jpg" alt="">
                </div>

                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="{{route('dashboard.index')}}" class="nav__link">
                            <i class="ri-home-line"></i>
                            Dashbord
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="" class="nav__link">
                            <i class="ri-home-line"></i>
                            Cadastrar provedor
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="" class="nav__link">
                            <i class="ri-home-line"></i>
                            Cadastrar provedor
                        </a>
                    </li>
                </ul>
            </nav>         
        </div>
    </header>
    <section class="body">
        <div class="config">
            <div class="config__search">
                <i class="ri-menu-line"></i>
                <form action="">
                    <input type="search" name="" id="" placeholder="Buscar">
                </form>
            </div>
            <div class="config__user">
                <i class="ri-mail-line"></i>
                <i class="ri-notification-3-line"></i>
                <div class="user">
                    <img src="/assets/imagem/adicionais/Fun Kids.jpg" alt="" id="servico_single_adicional--img">
                    <p>Matheus</p>
                </div>
                <i class="ri-more-2-fill"></i>
            </div>
        </div>
        <div class="bemVindo">Ola, Matheus</div>

        <x-render/>

    </section>
    <script src="{{ asset('js/painel.js') }}"></script>
</body>
</html>
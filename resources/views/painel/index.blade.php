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
    <x-dashboard.menu/>
    <section class="body">
        <x-dashboard.header-bord descricao="Bem vindo!!" usuarioLogado="{{$usuarioLogado}}"/>
        <div class="dados">
            <div class="dados__single -money">
                <button><i class="ri-line-chart-fill"></i></button>
                <p>renda mesal <br> <span>4.000R$</span></p>
            </div>
            <div class="dados__single">
                <button><i class="ri-refund-2-line"></i></button>
                <p>Total disponivel <br> <span>40.000R$</span></p>
            </div>
            <div class="dados__single -user">
                <button><i class="ri-user-fill"></i></button>
                <p>Total de usuarios<br> <span>{{$quantidadeUser}} usuario</span></p>
            </div>
            <div class="dados__single -planos">
                <button><i class="ri-wifi-fill"></i></button>
                <p>Planos existente <br> <span>{{$totalPlanos}} planos</span></p>
            </div>
        </div>
                
    </section>
    <script src="{{asset('js/painelHome.js')}}"></script>
</body>
</html>
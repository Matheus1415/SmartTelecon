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
<section class="loginPage">
        @if ($errors->any())
            <div class="erro">
                <ul>
                    @foreach ($errors->all() as $erro)
                        <li>{{ $erro }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{route('lendPage.autenticacao')}}" method="POST" class="loginForm">
            @csrf
            <h1>Acesse sua conta</h1>
            
            <div class="wraper_input">
                <label for="email">Digite seu email:</label>
                <input type="email" id="email" name="email" value="mp@gmail.com">
            </div>
            <div class="wraper_input">
                <label for="senha">Digite sua senha:</label>
                <div class="wraper_senha">
                    <input
                        type="password"
                        id="senha"
                        name="senha"
                        value="Madara12345&"
                    >
                    <i class="ri-eye-line" id="senhaIco"></i>
                </div>
                <div class="wraper_input">
                    <input type="submit" class="loginSubmit" value="Entrar"/>
                    <a href="{{route('lendPage.create')}}">Cadastre-se</a>
                </div>
            </div>
        </form>
    <div class="imgLogin"></div>
</section>    

<script src="{{asset('js/login.js')}}"></script>

</body>
</html>
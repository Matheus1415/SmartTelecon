<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rota de erro</title>
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/erro.css')}}">
</head>
<body>
    <div class="imgErro"></div>
    <div class="messsagemErro">
        <h1>Ops! Parece que esta página não foi encontrada.</h1>
        <p>
            @if ($message === '')
                Parece que você tentou acessar uma página que não existe. Por favor, verifique se digitou o URL corretamente.
            @else
                {{$message}}
            @endif
        </p>
        <a href="{{route('index')}}">Voltar para a página inicial</a>
    </div>
</body>
</html>
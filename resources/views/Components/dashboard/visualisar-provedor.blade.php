<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/painel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">    
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <title>Visualisar Provedor</title>
</head>
<body>
    <x-dashboard.menu/>
    <x-dashboard.header-bord descricao="Visualisar Provedor"/>

    @isset($mensagemSucesso)
        <div class="sucesso">
            {{ $mensagemSucesso }}
        </div>
    @endisset

    <div class="provedor__container">
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>CNPJ</th>
                        <th>Telefone</th>
                        <th>Endereço</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th>CEP</th>
                        <th>Senha</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($provedores as $provedor)
                    <tr>
                        <td>{{ $provedor->nome }}</td>
                        <td>{{ $provedor->email }}</td>
                        <td>{{ $provedor->cnpj }}</td>
                        <td>{{ $provedor->telefone }}</td>
                        <td>{{ $provedor->endereco }}</td>
                        <td>{{ $provedor->cidade }}</td>
                        <td>{{ $provedor->estado }}</td>
                        <td>{{ $provedor->cep }}</td>
                        <td>{{$provedor->senha}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
</body>
</html>
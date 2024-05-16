<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/painel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">    
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <title>Visualizar Planos de Internet</title>
</head>
<body>
    <x-dashboard.menu/>
    <section class="body">
        <x-dashboard.header-bord descricao="Visualizar Planos de internet" usuarioLogado="{{$usuarioLogado}}"/>
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
                            <th>ID</th>
                            <th>Email do Comprador</th>
                            <th>Nome do Comprador</th>
                            <th>Número do Cartão</th>
                            <th>Valor da Venda</th>
                            <th>Vencimento do Cartão</th>
                            <th>Código do Cartão</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vendas as $venda)
                            <tr>
                                <td>{{ $venda->id }}</td>
                                <td>{{ $venda->emailComprador }}</td>
                                <td>{{ $venda->nomeComprador }}</td>
                                <td>{{ $venda->numeroCartao }}</td>
                                <td>{{ $venda->valor }}</td>
                                <td>{{ $venda->vencimentoCartao }}</td>
                                <td>{{ $venda->codigoCartao }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    
                </table>
            </div>

        </div>
    </section>
    <script src="{{ asset('js/painelHome.js') }}"></script>
    <script src="{{ asset('js/sucesso.js') }}"></script>
</body>
</html>

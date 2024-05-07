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
        <x-dashboard.header-bord descricao="Visualizar Provedor" usuarioLogado="{{$usuarioLogado}}"/>
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
                            <th>Nome do Plano</th>
                            <th>Preço</th>
                            <th>Tempo de Fidelidade (meses)</th>
                            <th>Taxa de Cancelamento</th>
                            <th>Tipo de Conexão</th>
                            <th>Velocidade de Download</th>
                            <th>Velocidade de Upload</th>
                            <th>Instalação Inclusa</th>
                            <th>Descrição Geral</th>
                            <th>Disponibilidade Geográfica</th>
                            <th>Limite de Dados</th>
                            <th>Equipamentos Fornecidos</th>
                            <th>Upgrade/Downgrade Disponível</th>
                            <th>Política de Garantia de Velocidade</th>
                            <th>Ofertas Especiais</th>
                            <th>Opções de Pagamento</th>
                            <th>Suporte ao Cliente</th>
                            <th>Criado em</th>
                            <th>Atualizado em</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Plano A</td>
                            <td>$49.99</td>
                            <td>12</td>
                            <td>$0.00</td>
                            <td>Fibra Óptica</td>
                            <td>400 Mbps</td>
                            <td>150 Mbps</td>
                            <td>Sim</td>
                            <td>Excelente para streaming e jogos online.</td>
                            <td>Nacional</td>
                            <td>Ilimitado</td>
                            <td>Roteador Wi-Fi</td>
                            <td>Sim</td>
                            <td>Garantia de velocidade por contrato</td>
                            <td>Desconto de 10% para novos clientes</td>
                            <td>Cartão de Crédito, Débito Automático</td>
                            <td>Telefone, Chat Online, E-mail</td>
                            <td>2024-05-07</td>
                            <td>2024-05-07</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </section>
    <script src="{{asset('js/painelHome.js')}}"></script>
</body>
</html>

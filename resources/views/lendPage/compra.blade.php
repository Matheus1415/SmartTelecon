<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Compra deo planod e internet</title>
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/compra.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
</head>
<body>
    <div class="container">
        <div class="boxDetalhe">
            <h2>Fassa sua compra agora <span class="destaque">Teste Mode</span></h2>
            <div class="asinatura">
                <p class="asinatura_nome">Assine o plano {{$plano->nome}}</p>
                <h1>R$ {{$plano->preco}} <span>por mês</span></h1>
            </div>
            <div class="sectionPlano">
                <div class="sectionPlano_detalhe">
                    <p>{{$plano->nome}}</p>
                    <p> R$ {{$plano->preco}}</p>
                </div>
                <p class="sectionPlano_paragrafo">Cobrado mensalmente</p>
            </div>

            <div class="sectionPlano">
                <div class="sectionPlano_detalhe">
                    <p>Sub Total</p>
                    <p> R$ 0,00</p>
                </div>
                <a href="#">Coloque o codego Promocional</a>
            </div>
            <div class="sectionPlano">
                <div class="sectionPlano_detalhe">
                    <p>Total da Compra</p>
                    <p> R$ {{$plano->preco}}</p>
                </div>
            </div>
        </div>
        <div class="boxCompra">
            <form action="{{ route('venda', $plano->id) }}" method="POST">
                @csrf
                <div class="form_wraper">
                    <h2>Dados de Contato</h2>
                    <div class="form_wraper_input">
                        <label for="emailCompra">E-mail</label>
                        <input type="email" id="emailCompra" name="emailCompra" placeholder="Ex:. exemplo@gmail.com" value="exemplo@gmail.com">
                    </div>
                </div>

                <div class="form_wraper">
                    <h2>Forma de Pagamento</h2>
                    <div class="form_flex_pagemento">
                        <div class="boxPagemento">
                            <i class="ri-bank-card-fill"></i>
                            <p>Cartão</p>
                        </div>
                        <div class="boxPagemento">
                            <i class="ri-bank-card-2-fill"></i>
                            <p>Boleto</p>
                        </div>
                    </div>
                </div>

                <div class="form_wraper">
                    <h2>Dados do Cartão</h2>
                    <div class="form_flex">
                        <input type="text" id="numeroCartao" name="numeroCartao" placeholder="Ex:. 1234 1234 1234 1234" value="234 1234 1234 1234">
                        <img src="imagem/formaDePagemento.png" alt="">
                    </div>
                    <div class="form_flex">
                        <div class="form_flex_wraper">
                            <input type="text" name="vencimentoCartao" id="vencimentoCartao" placeholder=" MM/AA" value="11/11">
                        </div>
                        <div class="form_flex_wraper">
                            <input type="text" name="codigoCartao" id="codigoCartao" placeholder=" CVC" value="111">
                        </div>
                    </div>
                </div>

                <div class="form_wraper">
                    <h2>Nome do Titular</h2>
                    <input type="text" id="nomeComprador" name="nomeComprador" placeholder="Digite seu nome" value="Carlos Gabriel">
                </div>

                <input type="submit" class="compraSubmit" value="Comprar Plano">

            </form>
        </div>
    </div>

    <script src="{{asset("js/compra.js")}}"></script>
</body>
</html>
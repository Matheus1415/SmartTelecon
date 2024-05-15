
<div class="servico__single">
    @if ($plano->ofertas_especiais)
        <h1>{{$plano->ofertas_especiais}}</h1>
    @endif
    <h2>{{ $plano->nome }}</h2>
    <ul>
        <li>instalação inclusa</li>
        <li>100% {{$plano->tipo_conexao}}</li>
        <li>Wi-fi Alta Performace</li>
        <li>Dowload {{$plano->velocidade_download}}Mbs</li>
        <li>Upload {{$plano->velocidade_upload}}Mbs</li>
    </ul>
    <div class="informacao">
        <span><strong>{{ $plano->preco }}$</strong> /Mês</span>
        <p class="detalhes" data-plano="{{ json_encode($plano) }}">Detalhes</p>
        <a href="{{route('comprarPlano',$plano->id)}}" class="compra"   >Comprar</a>
        {{-- <p class="compra" data-compra="{{json_encode($plano)}}">Comprar</p> --}}
    </div>
</div>

<div class="compraBox">
    <h1></h1>
    <div class="compraBox_descricao">
        <h3>Leia Com atenção</h3>
        <p>Ao prosseguir com a compra de nossos produtos ou serviços, você concorda expressamente com os termos e condições estabelecidos neste documento.</p>
        <ol>
            <li>Compromisso de Compra: Ao clicar em "Comprar" ou equivalente, você está formalizando um compromisso de compra dos itens selecionados, concordando em pagar o valor total especificado durante o processo de checkout.</li>
            <li>Condições de Pagamento: O pagamento deverá ser efetuado de acordo com os métodos de pagamento aceitos pela nossa plataforma. Após a confirmação do pagamento, iniciaremos o processamento do seu pedido.</li>
        </ol>
        <p class="compraBox_descricao--valor"></p>
    </div>
    <div class="warper_Compra">
        <button id="CancelarCompra">Cancelar</button>
        <form method="POST">
            @csrf
            <input type="submit" id="CompraPlano" value="Comprar">
        </form>
    </div>
</div>

<x-modal/>

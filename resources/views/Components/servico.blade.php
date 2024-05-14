
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
        <a href="#" class="compra" id="compra">Comprar</a>
    </div>
</div>

<x-modal/>

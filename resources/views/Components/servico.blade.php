
<div class="servico__single">
    <h1>Desconto</h1>
    <h2>{{ $titulo }}</h2>
    <ul>
        <li>instalação inclusa</li>
        <li>100% {{$tipo}}</li>
        <li>Wi-fi Alta Performace</li>
        <li>Dowload {{$dowload}}Mbs</li>
        <li>Upload {{$upload}}Mbs</li>
    </ul>
    <div class="informacao">
        <span><strong>{{ $preco }}$</strong> /Mês</span>
        <p class="detalhes" id="detalhes">Detalhes</p>
        <a href="#" class="compra" id="compra">Comprar</a>
    </div>
</div>

<x-modal :titulo="$titulo" :preco="$preco" :descricao="$descricao "/>

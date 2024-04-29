
<div class="servico__single">
    <h1>{{ $titulo }}</h1>
    <p>{{ $descricao }}</p>
    <div class="servico_single_adicional">
        <img src="/assets/imagem/adicionais/Fun Kids.jpg" alt="" id="servico_single_adicional--img">
        <img src="/assets/imagem/adicionais/Fun Kids.jpg" alt="" id="servico_single_adicional--img">
        <img src="/assets/imagem/adicionais/Fun Kids.jpg" alt="" id="servico_single_adicional--img">
        <img src="/assets/imagem/adicionais/Fun Kids.jpg" alt="" id="servico_single_adicional--img">
        <img src="/assets/imagem/adicionais/Fun Kids.jpg" alt="" id="servico_single_adicional--img">
    </div>
    <div class="informacao">
        <span>Por apenas <strong>{{ $preco }}$</strong> </span>
        <p class="detalhes" id="detalhes">Detalhes</p>
        <a href="#">Comprar</a>
    </div>
</div>

<x-modal :titulo="$titulo" :preco="$preco" :descricao="$descricao "/>

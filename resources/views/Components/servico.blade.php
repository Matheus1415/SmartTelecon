
<div class="servico__single">
    <h1>Desconto</h1>
    <h2>{{ $titulo }}</h2>
    <ul>
        <li>instalação inclusa</li>
        <li>100% fibra otica</li>
        <li>Wi-fi Alta Performace</li>
        <li>Dowload 400Mps</li>
        <li>Upload 150Mbs</li>
    </ul>
    <h3>App inclusos</h3>
    <div class="servico_single_adicional">
        <img src="/assets/imagem/adicionais/Fun Kids.jpg" alt="" id="servico_single_adicional--img">
        <img src="/assets/imagem/adicionais/Fun Kids.jpg" alt="" id="servico_single_adicional--img">
        <img src="/assets/imagem/adicionais/Fun Kids.jpg" alt="" id="servico_single_adicional--img">
    </div>
    <div class="informacao">
        <span><strong>{{ $preco }}$</strong> /Mês</span>
        <p class="detalhes" id="detalhes">Detalhes</p>
        <a href="#" class="compra" id="compra">Comprar</a>
    </div>
</div>

<x-modal :titulo="$titulo" :preco="$preco" :descricao="$descricao "/>

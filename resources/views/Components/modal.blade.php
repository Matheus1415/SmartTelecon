<div class="servico__sobre__modal" id="modal">
    <button id="close">x</button>
    <div class="container">
        <div class="modal_header">
            <p>{{$plano->nome}}</p>
        </div>
        <div class="modal__section">
            <h2>Finalidade</h2>
            <p>Tempo de fidelidade <span>{{$plano->tempo_fidelidade_meses}}</span></p>
            <p>Taxa de cancelamento <span>R$ {{$plano->taxa_cancelamento}}</span></p>
            <p>Preço Mensal <span>R$ {{$plano->preco}}</span></p>
        </div>
        <div class="modal__section">
            <h2>Mais Detalhes</h2>
            <span>INTERNET</span>
            <ul>
                <li>{{$plano->instalacao_inclusa}}</li>
                <li>100% {{$plano->tipo_conexao}}</li>
                <li>Wi-fi Alta Performace</li>
                <li>Dowload {{$plano->velocidade_download}}Mps</li>
                <li>Upload {{$plano->velocidade_upload}}Mbs</li>
                <li>Limite de dados {{$plano->limite_dados}}Mbs</li>
                <li>Suporte ao Cliente {{$plano->suporte_cliente}}Mbs</li>
                <li>Disponibilidade Geografica {{$plano->disponibilidade_geografica}}Mbs</li>
            </ul>
            <h2>Servicos Digitais</h2>
            <details>
                <summary>
                    <span>Politica e Privacidade</span>
                </summary>
                <p>{{$plano->politica_garantia_velocidade}}</p>
                <p>{{$plano->equipamentos_fornecidos}}</p>
                <p>{{$plano->descricao_geral}}</p>
            </details>

            <details>
                <summary>
                    <span>Opções de Pagamento</span>
                </summary>
                <p>{{$plano->opcoes_pagamento}}</p>
            </details>

        </div>    
    </div>
</div>

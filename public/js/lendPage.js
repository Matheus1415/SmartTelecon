document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById('modal');
    var overlay = document.getElementById('overlay');
    var btnClose = document.getElementById('close');

    btnClose.addEventListener('click', function() {
        modal.style.display = 'none';
        overlay.style.display = 'none';
    });

    let btnDetalhes = document.querySelectorAll('.detalhes');

    btnDetalhes.forEach(function(btn) {
        btn.addEventListener('click', function() {

            let plano = JSON.parse(this.getAttribute('data-plano'));
            //Condições de resposta
            let planoTempo = plano.tempo_fidelidade_meses > 1 ? `${plano.tempo_fidelidade_meses} Meses` : `${plano.tempo_fidelidade_meses} Mês`;
            let planoInstalacao = plano.instalacao_inclusa === 'sim'? 'Instalação inclusa' : 'Instalação a parte';


            let modalHeader = modal.querySelector('.modal_header p');
            modalHeader.innerText = plano.nome;

            let modalSections = modal.querySelectorAll('.modal__section');
            modalSections[0].querySelector('span').innerText = planoTempo;
            modalSections[0].querySelectorAll('p')[1].querySelector('span').innerText = `R$ ${plano.taxa_cancelamento}`;
            modalSections[0].querySelectorAll('p')[2].querySelector('span').innerText = `R$ ${plano.preco}`;

            modalSections[1].querySelectorAll('li')[0].innerText = planoInstalacao;
            modalSections[1].querySelectorAll('li')[1].innerText = `100%  ${plano.tipo_conexao}`;
            modalSections[1].querySelectorAll('li')[3].innerText = `Download ${plano.velocidade_download} Mps`;
            modalSections[1].querySelectorAll('li')[4].innerText = `Upload ${plano.velocidade_upload} Mbs`;
            modalSections[1].querySelectorAll('li')[5].innerText = `Limite de dados ${plano.limite_dados} Mbs`;
            modalSections[1].querySelectorAll('li')[6].innerText = `Suporte ao Cliente Atravez de ${plano.suporte_cliente}`;
            modalSections[1].querySelectorAll('li')[7].innerText = `Disponibilidade Geográfica ${plano.disponibilidade_geografica}`;

            let politicaPrivacidadeDetails = modalSections[1].querySelectorAll('details')[0];
            politicaPrivacidadeDetails.querySelector('span').innerText = 'Política e Privacidade';
            politicaPrivacidadeDetails.querySelector('p').innerText = plano.politica_garantia_velocidade;

            let opcoesPagamentoDetails = modalSections[1].querySelectorAll('details')[1];
            opcoesPagamentoDetails.querySelector('span').innerText = 'Opções de Pagamento';
            opcoesPagamentoDetails.querySelector('p').innerText = plano.opcoes_pagamento;

            // Exibir o modal
            modal.style.display = 'block';
            overlay.style.display = 'block';
        });
    });
});

//Menu

let menuIco = document.getElementById('menu');
let itemMneu = document.getElementById('itemMenu');
let menuStatus = true;

menuIco.addEventListener('click', () => {
    if(menuStatus){
        itemMneu.style.display ='block'
        menuStatus = false 
    }else{
        menuStatus = true
        itemMneu.style.display ='none'
    }
})

//Compra do plano de internet
document.addEventListener('DOMContentLoaded', function() {
    let overlay = document.getElementById('overlay');
    // Botões
    let compraBox = document.querySelector('.compraBox');
    let CancelarCompra = document.getElementById('CancelarCompra');
    let CompraPlano = document.getElementById('CompraPlano');

    let btnComprar = document.querySelectorAll('.compra');

    btnComprar.forEach((btn) => {
        btn.addEventListener('click', function() {
            //Exibição
            let plano = JSON.parse(this.getAttribute('data-compra'));
            compraBox.style.display = 'block';
            overlay.style.display = 'block';
            compraBox.querySelector('h1').innerHTML = `Compra do plano de <span>${plano.nome}</span>`;
            compraBox.querySelector('.compraBox_descricao--valor').innerHTML = `Valor da compra é ${plano.preco} R$`;

            //Comprar do plano
            let comprarForm = document.getElementById('comprarForm');
            let valor = plano.preco; 
            let idVendedor = plano.planos_user_id; 
            let idPlano = plano.id; 
            
            comprarForm.action = "{{ route('lendPage.comprar', :valor, :idVendedor, :idPlano) }}";
            comprarForm.action = comprarForm.action.replace(':valor', valor);
            comprarForm.action = comprarForm.action.replace(':idVendedor', idVendedor);
            comprarForm.action = comprarForm.action.replace(':idPlano', idPlano);
        });
    });

    CancelarCompra.addEventListener('click', function() {
        compraBox.style.display = 'none';
        overlay.style.display = 'none';
    });

    CompraPlano.addEventListener('click', function() {
        compraBox.style.display = 'none';
        overlay.style.display = 'none';
    });
});

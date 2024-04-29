// var imagemServicoAdicional = document.querySelectorAll('#servico_single_adicional--img');

// for(var indice = 3 ; indice < imagemServicoAdicional.length; indice++ ){
//     imagemServicoAdicional[indice].style.display = 'none';
// }

var modal = document.getElementById('modal');

modal.addEventListener('click', function() {
    modal.style.display = 'none';
});

let  btnDetalhes = document.querySelectorAll('#detalhes');

btnDetalhes.forEach(function(btn) {
    btn.addEventListener('click', function() {
        modal.style.display = 'block';
    });
});

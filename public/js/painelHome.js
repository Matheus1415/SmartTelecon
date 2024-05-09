document.addEventListener('DOMContentLoaded', () => {
    let headerIco = document.getElementById('menuDash');
    let menuDashTwo = document.getElementById('menuDashTwo');
    let header = document.getElementById('header');
    let body = document.querySelector('.body'); // Selecionar o elemento body


    headerIco.addEventListener('click', () => {
        if (header.style.display === 'none') {
            header.style.display = 'block';
        } else {
            header.style.display = 'none';
            body.style.width = '100%';
        }
        console.log('Ícone clicado');
    });

    menuDashTwo.addEventListener('click', () => {
        header.style.display = 'none';
        body.style.width = '100%';
    });
});

var sucessoNotificacao = document.querySelector(".sucesso");
var erroNotificacao = document.querySelector(".erro");
var btnCloseNotificacaoErro = document.querySelector(".btnErro");
var btnCloseNotificacao = document.querySelector(".closeNotificacao");

function closeMenuTempoSucesso() {
    setTimeout(() => {
        sucessoNotificacao.style.display = 'none';
    }, 15000);
}

function closeMenuTempoErro() {
    setTimeout(() => {
        erroNotificacao.style.display = 'none';
    }, 15000);
}

closeMenuTempoErro();
closeMenuTempoSucesso();

btnCloseNotificacao.addEventListener('click', () => {
    sucessoNotificacao.style.display = 'none';
});
btnCloseNotificacaoErro.addEventListener('click', () => {
    erroNotificacao.style.display = 'none';
});

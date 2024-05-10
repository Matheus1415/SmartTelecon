document.addEventListener('DOMContentLoaded', () => {
    var btnCloseNotificacaoErro = document.querySelector(".btnErro");
    var btnCloseNotificacao = document.querySelector(".closeNotificacao");

    function closeMenuTempoErro() {
        setTimeout(() => {
            erroNotificacao.style.display = 'none';
        }, 15000);
    }
    btnCloseNotificacaoErro.addEventListener('click', () => {
        erroNotificacao.style.display = 'none';
    });

    closeMenuTempoErro();
})

document.addEventListener('DOMContentLoaded', () => {
    var erro = document.querySelector(".erro");
    var btnCloseNotificacao = document.querySelector(".closeNotificacao");

    function closeMenuTempoErro() {
        setTimeout(() => {
            erro.style.display = 'none';
        }, 15000);
    }
    btnCloseNotificacao.addEventListener('click', () => {
        erro.style.display = 'none';
    });

    closeMenuTempoErro();
})

document.addEventListener('DOMContentLoaded', () => {
    var sucessoNotificacao = document.querySelector(".sucesso");
    var erroNotificacao = document.querySelector(".erro");

    function closeMenuTempoSucesso() {
        setTimeout(() => {
            sucessoNotificacao.style.display = 'none';
        }, 15000);
    }

    closeMenuTempoSucesso();

    btnCloseNotificacao.addEventListener('click', () => {
        sucessoNotificacao.style.display = 'none';
    });
})
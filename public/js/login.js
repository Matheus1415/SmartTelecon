const senha = document.getElementById('senha');
const senhaIco = document.getElementById('senhaIco');

senhaIco.addEventListener('click', () => {
    if(senha.type == 'password') {
        senha.type = 'text';
        senhaIco.classList.add('ri-eye-off-line');
    }else{
        senha.type = 'password';
        senhaIco.classList.remove('ri-eye-off-line');
        senhaIco.classList.add('ri-eye-line');
    }
})
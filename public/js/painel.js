const form = document.getElementById('cadastro');

function handleFormSubmit(event) {
    event.preventDefault();

    const nome = form.querySelector('#nome').value;
    const email = form.querySelector('#email').value;
    const cnpj = form.querySelector('#cnpj').value;
    const telefone = form.querySelector('#telefone').value;
    const endereco = form.querySelector('#endereco').value;
    const cidade = form.querySelector('#cidade').value;
    const estado = form.querySelector('#estado').value;
    const cep = form.querySelector('#cep').value;
    const senha = form.querySelector('#senha').value;
    const senhaComfirme = form.querySelector('#senhaComfirme').value;
    const enderecoUser = document.querySelector('.endereco');
    const userSenha = document.querySelector('.senha');

    if (nome !== '' && email !== '' && cnpj !== '' && telefone !== '') {
        enderecoUser.style.display = 'block'; 
    }

    if(endereco !='' && cidade != '' && estado != '' && cep != '') {
        userSenha.style.display = 'block'; 
    }

}

form.addEventListener('submit', handleFormSubmit);

form.querySelectorAll('#nome, #email, #cnpj, #telefone').forEach(input => {
    input.addEventListener('input', function() {
        handleFormSubmit(new Event('submit'));
    });
});

form.querySelectorAll('#endereco, #cidade, #estado, #cep').forEach(input => {
    input.addEventListener('input', function() {
        handleFormSubmit(new Event('submit'));
    });
})
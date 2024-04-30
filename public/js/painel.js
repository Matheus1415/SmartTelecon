const form = document.getElementById('cadastro');

function handleFormSubmit(event) {
    event.preventDefault();

    const nome = form.querySelector('#nome').value;
    const email = form.querySelector('#email').value;
    const cnpj = form.querySelector('#cnpj').value;
    const telefone = form.querySelector('#telefone').value;
    const enderecoUser = document.querySelector('.endereco');

    if (nome !== '' && email !== '' && cnpj !== '' && telefone !== '') {
        enderecoUser.style.display = 'block';
    } 

    if(endereco !='' && cidade != '' && estado != '' && cep != '') {

    }
    
    console.log('Nome:', nome);
    console.log('E-mail:', email);
    console.log('CNPJ:', cnpj);
    console.log('Telefone:', telefone);
    console.log('Endereço:', endereco);
    console.log('Cidade:', cidade);
    console.log('Estado:', estado);
    console.log('CEP:', cep);
    console.log('Senha:', senha);
    console.log('Confirmação de Senha:', senhaComfirme);
}

form.addEventListener('submit', handleFormSubmit);

// Adiciona um ouvinte de evento para os campos obrigatórios
form.querySelectorAll('#nome, #email, #cnpj, #telefone').forEach(input => {
    input.addEventListener('input', function() {
        handleFormSubmit(new Event('submit'));
    });
});

form.querySelector

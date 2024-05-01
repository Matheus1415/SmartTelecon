const form = document.getElementById('cadastro');

function handleFormSubmit(event, user,localizacao,senha) {
    event.preventDefault();

    const enderecoUser = document.querySelector('.endereco');
    const userSenha = document.querySelector('.senha');
    const btnCadastroProvedor = document.querySelector('#btnCadastroProvedor');


    if (user) {
        enderecoUser.style.opacity = 1; 
    }

    if (localizacao) {
        userSenha.style.opacity = 1; 
    }

    // Verifica se as senhas coincidem
    if (senha) {
        btnCadastroProvedor.style.opacity = 1; 
    }

    console.log("Foi mandado todos os campos")

}

form.addEventListener('submit', handleFormSubmit);

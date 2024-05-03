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

//Mascaras

//12.345.678/0001-90

let cnpj = document.getElementById('cnpj');
console.log("Testando")

cnpj.addEventListener('keypress', () => {
    let cnpjLegth = cnpj.ariaValueMax.length;
    if(cnpjLegth == 2) {
        cnpj.value += '.';
    }
})
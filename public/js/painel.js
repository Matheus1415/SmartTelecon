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


document.addEventListener('DOMContentLoaded', function() {
    //CNPJ --12.345.678/0001-90
    let cnpj = document.getElementById('cnpj');
    cnpj.addEventListener('keydown', event => {

        let cnpjValue = cnpj.value; 
        let cnpjLength = cnpjValue.length;

        if (cnpjLength == 2 || cnpjLength == 6 ) {
            cnpj.value += '.';
        }
        if (cnpjLength == 10 ) {
            cnpj.value += '/';
        }
        if (cnpjLength == 15 ) {
            cnpj.value += '-';
        }

        if (event.key == 'Backspace' && cnpjLength > 0) {
            cnpj.value = cnpjValue.slice(0, -1); 
        }
        
        if (cnpjLength >= 18 && event.key !== 'Backspace' && event.key !== 'Delete') {
            event.preventDefault(); 
        }
    });

    //TELEFONE -- (85) 99150-7663
    let telefone = document.getElementById('telefone');
    telefone.addEventListener('keydown', event => {
        let telefoneValue = telefone.value;
        let telefoneLength = telefone.value.length;

        if(telefoneLength == 0) {
            telefone.value += '(';
        }

        if(telefoneLength == 3) {
            telefone.value += ')';
        }
        
        if(telefoneLength == 3) {
            telefone.value += ' ';
        }

        if (telefoneLength == 10 ) {
            telefone.value += '-';
        }

        if (event.key == 'Backspace' && telefoneLength > 0) {
            telefone.value = telefoneValue.slice(0, -1); 
        }

        if(telefoneLength >= 15 || event.key === 'Backspace' || event.key === 'Delete') {
            event.preventDefault(); 
        }
    })

    //CEP -- 65590-000

    let cep = document.getElementById('cep');
    cep.addEventListener('keydown', event => {
        let cepValue = cep.value;
        let cepLength = cep.value.length;

        if (cepLength == 5 ) {
            cep.value += '-';
        }

        if (event.key == 'Backspace' && cepLength > 0) {
            cep.value = cepValue.slice(0, -1); 
        }

        if(cepLength >= 9 || event.key === 'Backspace' || event.key === 'Delete') {
            event.preventDefault(); 
        }
    })
});


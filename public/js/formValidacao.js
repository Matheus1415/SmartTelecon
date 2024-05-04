//tipo de úsuario
document.addEventListener('DOMContentLoaded', () => {
    const selectTipoUser = document.getElementById('tipoUse');
    const endereco = document.querySelector('.endereco');
    const empresa = document.getElementById('empresa');
    const labelEmpresa = document.querySelector('label[for="empresa"]');

    selectTipoUser.addEventListener('click', function() {
        const selectedValue = selectTipoUser.value;
        if(selectedValue === 'provedor'){
            endereco.style.display = 'block';
            empresa.style.display = 'block';
            labelEmpresa.style.display = 'block';
        }else{
            endereco.style.display = 'none';
            empresa.style.display = 'none';
            labelEmpresa.style.display = 'none';
        }
    });
});


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

//Formulario Senha

const senha = document.getElementById('senha');
const senhaIco = document.getElementById('senhaIco');

const senhaConfirmada = document.getElementById('senhaConfirmada');
const senhaConfirmadaIco = document.getElementById('senhaConfirmadaIco');

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
senhaConfirmadaIco.addEventListener('click', () => {
    if(senhaConfirmada.type == 'password') {
        senhaConfirmada.type = 'text';
        senhaConfirmadaIco.classList.add('ri-eye-off-line');
    }else{
        senhaConfirmada.type = 'password';
        senhaConfirmadaIco.classList.remove('ri-eye-off-line');
        senhaConfirmadaIco.classList.add('ri-eye-line');
    }
})

document.addEventListener('DOMContentLoaded',() => {
    //EXEMPLO do numero de cartão 0000 0000 0000 0000
    let numeroCartao = document.getElementById('numeroCartao');

    numeroCartao.addEventListener("keydown", event => {
        let numeroCartaoValue = numeroCartao.value;
        let numeroCartaoLength = numeroCartaoValue.length;

        if(numeroCartaoLength == 4 || numeroCartaoLength == 9 || numeroCartaoLength == 14){
            numeroCartao.value +=' ';
        }

        if(event.key == 'Backspace' && numeroCartao > 0){
            numeroCartao.value = numeroCartaoValue.slice(0, -1);
        }

        if(numeroCartaoLength >= 19 && event.key !== 'Backspace' && event.key !== 'Delete'){
            event.preventDefault(); 
        }
    })

    let vencimentoCartao = document.getElementById('vencimentoCartao');

    vencimentoCartao.addEventListener("keydown", event => {
        let vencimentoCartaoValue = vencimentoCartao.value;
        let vencimentoCartaoLength = vencimentoCartaoValue.length;
    
        if (vencimentoCartaoLength === 2 && !vencimentoCartaoValue.includes('/')) {
            vencimentoCartao.value += '/';
        }
        
        if(event.key == 'Backspace' && vencimentoCartaoLength > 0){
            vencimentoCartao.value = vencimentoCartaoValue.slice(0, -1);
        }
        
    
        if(vencimentoCartaoLength >= 5 && event.key !== 'Backspace' && event.key !== 'Delete'){
            event.preventDefault(); 
        }
    })

    let codegoCartao = document.getElementById('codegoCartao');

    codegoCartao.addEventListener("keydown", event => {
        let codegoCartaoValue = codegoCartao.value;
        let codegoCartaoLength = codegoCartaoValue.length;
    
        
        if(event.key == 'Backspace' && vencimentoCartaoLength > 0){
            codegoCartao.value = codegoCartaoValue.slice(0, -1);
        }
        
    
        if(codegoCartaoLength >= 3 && event.key !== 'Backspace' && event.key !== 'Delete'){
            event.preventDefault(); 
        }
    })
        
    
})

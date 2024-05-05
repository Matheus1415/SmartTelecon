document.addEventListener('DOMContentLoaded', () => {
    let headerIco = document.getElementById('menuDash');
    let menuDashTwo = document.getElementById('menuDashTwo');
    let header = document.getElementById('header');
    let body = document.querySelector('.body'); // Selecionar o elemento body


    headerIco.addEventListener('click', () => {
        if (header.style.display === 'none') {
            header.style.display = 'block';
        } else {
            header.style.display = 'none';
            body.style.width = '100%';
        }
        console.log('Ícone clicado');
    });

    menuDashTwo.addEventListener('click', () => {
        header.style.display = 'none';
        body.style.width = '100%';
    });
});

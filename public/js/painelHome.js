document.addEventListener('DOMContentLoaded', () => {
    let headerIco = document.getElementById('menuDash');
    let header = document.getElementById('header');
    let body = document.querySelector('.body'); // Selecionar o elemento body

    headerIco.addEventListener('click', () => {
        if (header.style.display === 'none') {
            header.style.display = 'block';
            body.style.width = '85%';
        } else {
            header.style.display = 'none';
            body.style.width = '100%';
        }
        console.log('Ícone clicado');
    });
});

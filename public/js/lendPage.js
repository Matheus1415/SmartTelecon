//Modal
var modal = document.getElementById('modal');
var overlay = document.getElementById('overlay');
var btnClose = document.getElementById('close');

btnClose.addEventListener('click', function() {
    modal.style.display = 'none';
    overlay.style.display = 'none';
});

let  btnDetalhes = document.querySelectorAll('#detalhes');

btnDetalhes.forEach(function(btn) {
    btn.addEventListener('click', function() {
        modal.style.display = 'block';
        overlay.style.display = 'block';
    });
});

//Menu

let menuIco = document.getElementById('menu');
let itemMneu = document.getElementById('itemMenu');
let menuStatus = true;

menuIco.addEventListener('click', () => {
    if(menuStatus){
        itemMneu.style.display ='block'
        menuStatus = false 
    }else{
        menuStatus = true
        itemMneu.style.display ='none'
    }
})


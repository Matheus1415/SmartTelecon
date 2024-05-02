
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

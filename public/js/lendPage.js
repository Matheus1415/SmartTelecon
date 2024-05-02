
var modal = document.getElementById('modal');

modal.addEventListener('click', function() {
    modal.style.display = 'none';
});

let  btnDetalhes = document.querySelectorAll('#detalhes');

btnDetalhes.forEach(function(btn) {
    btn.addEventListener('click', function() {
        modal.style.display = 'block';
    });
});

function checkVisibility() {
    var elemento = document.querySelector('.sobre');
    
        var positionFromTop = elemento.getBoundingClientRect().top;
        
        if (positionFromTop - window.innerHeight < 0) {
            elemento.classList.add('animate');
        } else {
            elemento.classList.remove('animate');
        }
}

window.addEventListener('scroll', checkVisibility);

checkVisibility();


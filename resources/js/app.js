import './bootstrap';

window.deleteProduct = function(id) {
    console.log("Clicou o botão do produto " + id)
    console.log("Atualizado v2!")
    let div = document.getElementById('product_'+id);
    div.classList.add('deleted')
    setTimeout(function() {
        div.remove()
    }, 600)
}


console.log('teste');
console.log('teste 2');



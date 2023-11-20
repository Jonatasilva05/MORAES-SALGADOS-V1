/*FAZ O CONTAINER-TEXT(O CARD QUE TEM O EFEITO TRANSLATIVO EM VOLTA)
SUMIR E O GIRD FEITO A MÃO ORIGINAL APARECER*/
const container = document.querySelector(".container");
const row = document.querySelector(".container.text-center");

function mobile() {

    // Verifica a largura da tela
    var screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

    // quando for menor que 800 ativa a função
    if (screenWidth < 992) {
        container.style.display = 'inline-block';
        row.style.display = 'none';  
    } else {
        container.style.display = 'none'; 
        row.style.display = 'flex';  
    }
}

// Chama a função quando a página é carregada
window.addEventListener('load', mobile);
window.addEventListener('resize', mobile);
const computador = document.querySelector(".content");
const cell = document.querySelector('.content-comp');
const mediaQuery = window.matchMedia("(max-width: 1100px)");

function esconderElemento(mediaQuery) {
  if (mediaQuery.matches) {
    computador.style.display = "block";
    cell.style.display = "none";
  } else {
    computador.style.display = "none";
    cell.style.display = "block";
  }
}

esconderElemento(mediaQuery);
mediaQuery.addListener(esconderElemento);
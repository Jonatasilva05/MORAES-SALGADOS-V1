// const elemento1 = document.getElementById(".galeria");
// const elemento2 = document.createElement("div");
// elemento2.id = "elemento2";
// elemento2.textContent = "Novo elemento adicionado!";

// const mediaQuery = window.matchMedia("(max-width: 500px)");

// function esconderElemento(mediaQuery) {
//   if (mediaQuery.matches) {
//     elemento1.style.display = "none";
//     document.body.appendChild(elemento2);
//   } else {
//     elemento1.style.display = "block";
//     if (document.getElementById("elemento2")) {
//       document.getElementById("elemento2").remove();
//     }
//   }
// }

// esconderElemento(mediaQuery);
// mediaQuery.addListener(esconderElemento);



// ESCONDER DIV AO DETERMINADO ESPAÇAMENTO
const elemento = document.querySelector(".galeria");
// const elemento2 = document.querySelector('.ola'); //TESTE DEU CERTO
const mediaQuery = window.matchMedia("(max-width: 700px)");

function esconderElemento(mediaQuery) {
  if (mediaQuery.matches) {
    elemento.style.display = "none";
    // elemento2.style.display = "block"; //TESTE DEU CERTO
  } else {
    elemento.style.display = "block";
    // elemento2.style.display = "none"; //TESTE DEU CERTO
  }
}

esconderElemento(mediaQuery);
mediaQuery.addListener(esconderElemento);
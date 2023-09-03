let computador = document.querySelector(".content");
let cell = document.querySelector('.content-comp');
let mediaQuery = window.matchMedia("(max-width: 1100px)");

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



// const computador = document.querySelector(".content");
// // const cell = document.querySelector('.content-comp');
// const mediaQuery = window.matchMedia("(max-width: 1100px)");
// var divsComp = document.getElementsByClassName ("content-comp");

// function esconderElemento(mediaQuery) {
//   if (mediaQuery.matches) {
//     computador.style.display = "none";
//     cell.style.display = "none";
//   } else {
//     computador.style.display = "block";
//     cell.style.display = "none";
//   }
// }

// var divsComp = document.getElementsByClassName ("desabilitar");
//   for (var i = 0; i < divs.length; i++)
// var w = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
//   var divs = document.getElementsByClassName ("desabilitar");
//   for (var i = 0; i < divs.length; i++) {
//     if (w < 375) {
//       divs [i].style.display = "none";
//     }
//     else {
//       divs [i].style.display = "block";
//     }
//   }
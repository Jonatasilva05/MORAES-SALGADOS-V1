// Suponha que você tenha duas classes de divs: "classe1" e "classe2"
var divs1 = document.getElementsByClassName("content-comp");
var divs2 = document.getElementsByClassName("content");

// Suponha que você queira esconder todas as divs da classe1 e mostrar todas as divs da classe2 quando a largura da janela for menor que 600 pixels
window.addEventListener("resize", function() {
  if (window.innerWidth < 1100) {
    for (var i = 0; i < divs1.length; i++) {
      divs1[i].style.display = "none";
    }
    for (var i = 0; i < divs2.length; i++) {
      divs2[i].style.display = "block";
    }
  } else {
    for (var i = 0; i < divs1.length; i++) {
      divs1[i].style.display = "block";
    }
    for (var i = 0; i < divs2.length; i++) {
      divs2[i].style.display = "none";
    }
  }
});
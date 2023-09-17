const content = document.querySelector(".content");
const cardtoggle = document.querySelector(".toggle");

cardtoggle.onclick = function(){
    content.classList.toggle("active");
};
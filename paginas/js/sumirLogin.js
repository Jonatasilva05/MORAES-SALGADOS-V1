const te = document.querySelector('.login-box');
const Ativador = document.querySelector('#openMenu');
const removedor = document.querySelector('#closeMenu');

Ativador.addEventListener('click', () => {
    te.classList.add('sumiu');
})

removedor.addEventListener('click', () => {
    te.classList.remove
    ('sumiu');
})



// window.addEventListener("resize", function() {
//     if (window.innerWidth < 1100) {
//         Ativador.addEventListener('click', () => {
//             main.classList.add('active');
//         })
//         } 
//         // else
//         // {
//         //     main.classList.remove('active');
//         // }
// });
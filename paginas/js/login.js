const Box = document.querySelector('.login-box');
const registro = document.querySelector('.register-link');
const login = document.querySelector('.login-link');

registro.addEventListener('click', () => {
    Box.classList.add('active');
})

login.addEventListener('click', () => {
    Box.classList.remove('active');
})
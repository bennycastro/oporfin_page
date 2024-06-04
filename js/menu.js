const menu = document.querySelector('.navegacion-principal');
const btn =  document.querySelector('.menu-movil');

btn.addEventListener('click',() =>{
    menu.classList.toggle('active')
})
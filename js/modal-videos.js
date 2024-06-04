const modalBtn = document.querySelector('.yt-modal-btn');
const modal = document.querySelector('.modal-bg');

modalBtn.addEventListener('click', () => {
    
    modal.innerHTML =  `
    <div class="modal">
    <iframe width="942" height="530" src="https://www.youtube.com/embed/ecSx4XxDths" title="¿Como solicitar tu crédito Oporfin?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

     `;
     modal.style.display = "flex";

     setTimeout(() => {
        modal.style.opacity = "1";
     }, 50);
});

modal.addEventListener('click', () => {
    modal.innerHTML = '';
    modal.style.opacity = "0";
    setTimeout (() => {
        modal.style.display ="none";
    }, 450);
});
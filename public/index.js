document.addEventListener("DOMContentLoaded", function() {
    const hamburger = document.querySelector('.nav-hamburger');
    const menu = document.querySelector('.menua');

    hamburger.addEventListener('click', function() {
        console.log("Se hizo clic en el icono de hamburguesa");
        menu.classList.toggle('active');
        console.log("Clase 'active' aplicada al menú");
    });
});

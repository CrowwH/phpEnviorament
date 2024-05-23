document.addEventListener("DOMContentLoaded", function () {
    console.log("Script cargado correctamente.");
    var links = document.querySelectorAll(".menua2 a");
    links.forEach(function (link) {
    link.addEventListener("click", function (event) {
        event.preventDefault();
        var targetId = this.getAttribute("href");
        console.log("Enlace clicado:", targetId);
        var targetSection = document.querySelector(targetId);
        if (targetSection) {
        console.log("Sección encontrada:", targetSection);
        targetSection.scrollIntoView({ behavior: "smooth", block: "start" });
        } else {
        console.log("Sección no encontrada.");
        }
    });
    });
});
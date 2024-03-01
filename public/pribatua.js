document.addEventListener("DOMContentLoaded", function () {
    const datosPersonalesLink = document.querySelector('a[href="#datos_personales"]');
    const resultadosLink = document.querySelector('a[href="#resultados"]');
    const pagosLink = document.querySelector('a[href="#pagos"]');
    const datosPersonalesSection = document.getElementById('datos_personales');
    const resultadosSection = document.getElementById('resultados');
    const pagosSection = document.getElementById('pagos');

    let currentSection = datosPersonalesSection; // Inicialmente establecer la sección actual como "Datos personales"

    datosPersonalesLink.addEventListener("click", function (event) {
        event.preventDefault();
        toggleSection(datosPersonalesSection);
    });

    resultadosLink.addEventListener("click", function (event) {
        event.preventDefault();
        toggleSection(resultadosSection);
    });

    pagosLink.addEventListener("click", function (event) {
        event.preventDefault();
        toggleSection(pagosSection);
    });

    function toggleSection(section) {
        // Ocultar la sección actual
        currentSection.classList.remove("active");
        
        // Mostrar la sección deseada
        section.classList.add("active");
        
        // Actualizar la sección actual
        currentSection = section;
    }
});
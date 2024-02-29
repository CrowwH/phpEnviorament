document.addEventListener("DOMContentLoaded", function () {
  alert("El DOM ha sido cargado.");

  const sections = document.querySelectorAll(".section");
  alert("Se encontraron las secciones: " + sections.length);

  const links = document.querySelectorAll(".menua a");
  alert("Se encontraron los enlaces: " + links.length);

  links.forEach(link => {
      link.addEventListener("click", function (e) {
          alert("Se hizo clic en un enlace.");

          e.preventDefault();
          const targetId = this.getAttribute("href");
          alert("El ID del objetivo es: " + targetId);

          const targetSection = document.querySelector(targetId);
          alert("La sección objetivo es: " + targetSection.id);

          sections.forEach(section => {
              section.classList.remove("active");
          });

          targetSection.classList.add("active");
      });
  });
});
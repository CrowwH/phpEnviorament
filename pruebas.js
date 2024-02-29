document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll(".menua a");

    links.forEach(link => {
        link.addEventListener("click", function (e) {
            e.preventDefault();
            const targetId = this.getAttribute("href");
            const targetSection = document.querySelector(targetId);

            // Remove active class from all sections
            document.querySelectorAll(".section").forEach(section => {
                section.classList.remove("active");
            });

            // Add active class to target section
            targetSection.classList.add("active");
        });
    });
});
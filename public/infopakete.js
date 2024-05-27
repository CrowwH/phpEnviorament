// Obtener todos los botones de paquetes
const buttons = document.querySelectorAll('.package-btn');

// Obtener elementos del DOM
const packageInfoDiv = document.getElementById('package-info');
const packageDetails = document.getElementById('package-details');
const hideInfoBtn = document.getElementById('hide-info-btn');
const startDeliveryBtn = document.getElementById('start-delivery-btn');
const inProgressPackageDiv = document.getElementById('in-progress-package');

// Variable para almacenar la información del paquete actual
let currentPackageInfo = null;
let currentPackageButton = null;

// Agregar un evento de clic a cada botón de paquete
buttons.forEach(button => {
    button.addEventListener('click', function () {
        // Obtener la información del paquete del atributo data-info
        const info = JSON.parse(this.getAttribute('data-info'));
        currentPackageInfo = info; // Guardar la información del paquete actual
        currentPackageButton = this; // Guardar el botón actual

        // Mostrar la información del paquete en el div
        packageDetails.innerHTML =
            '<p>Pakete ID-a: ' + info.id_Paketea + '</p>' +
            '<p>Entregatze Helbidea: ' + info.entregatze_helbidea + '</p>' +
            '<p>Entregatze Data: ' + info.entregatze_data + '</p>';

        // Hacer visible el div de información del paquete
        packageInfoDiv.style.display = 'block';
    });
});

// Evento para el botón "Dejar de ver"
hideInfoBtn.addEventListener('click', function () {
    packageInfoDiv.style.display = 'none';
    currentPackageInfo = null; // Limpiar la información del paquete actual
    currentPackageButton = null; // Limpiar el botón actual
});

// Evento para el botón "Repartir"
startDeliveryBtn.addEventListener('click', function () {
    if (currentPackageInfo && currentPackageButton) {
        // Mover la información del paquete al div de "Abian dagoen Paketea"
        inProgressPackageDiv.innerHTML =
            '<p>Pakete ID-a: ' + currentPackageInfo.id_Paketea + '</p>' +
            '<p>Entregatze Helbidea: ' + currentPackageInfo.entregatze_helbidea + '</p>' +
            '<p>Entregatze Data: ' + currentPackageInfo.entregatze_data + '</p>';

        // Eliminar el botón del paquete de "Banatu beharreko paketeak"
        currentPackageButton.remove();

        // Ocultar el div de información del paquete
        packageInfoDiv.style.display = 'none';
        currentPackageInfo = null; // Limpiar la información del paquete actual
        currentPackageButton = null; // Limpiar el botón actual
    }
});
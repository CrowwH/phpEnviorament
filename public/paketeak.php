<?php
// Iniciar sesión al principio del script para evitar problemas de envío de encabezados
session_start();

// Establecer la conexión a la base de datos (reemplaza los valores según tu configuración)
$servername = "mysql";
$username = "root";
$password = "root";
$database = "paketeria";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener el ID del usuario que ha iniciado sesión
$id_langilea = $_SESSION['id_Langilea'];

// Consulta SQL para obtener los paquetes del usuario usando declaraciones preparadas
$stmt = $conn->prepare("SELECT * FROM Paketea WHERE id_Langilea = ?");
$stmt->bind_param("i", $id_langilea);
$stmt->execute();
$result = $stmt->get_result();

// Verificar si se encontraron resultados
if ($result->num_rows > 0) {
    // Mostrar los paquetes del usuario
    while ($row = $result->fetch_assoc()) {
        echo "ID del Paquete: " . $row["id_Paketea"]. 
        " - Dirección de entrega: " . $row["entregatze_helbidea"]. 
        "   Fecha de entrega: " . $row["entregatze_data"]. 
        "<br>";
        // Puedes mostrar más detalles si lo deseas
    }
} else {
    echo "No se encontraron paquetes para este usuario.";
}

// Cerrar conexión
$stmt->close();
$conn->close();
?>


















































<!--<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gune Pribatua</title>
    <link rel="shortcut icon" href="assets/img/logo erronka3.png" />
    <link rel="stylesheet" href="paketeak.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    Header
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
            <a href="dashboard.php" ><img src="img/logo erronka3.png" alt="enpresarenLogo" class="logoa" ></a>
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="paketeak.php">Pakete entrega</a>
                </li>
                <li>
                    <a href="perfila.php">Perfila</a>
                </li>
            </ul>
        </nav>
    </div>

    Edukia
    <div class="card-container">
        
        <div class="card">
            <h2>Banatu beharreko paketeak:</h2>
            <button>Banatu</button>
        </div>

        <div class="card">
            <h2>Abian dagoen Paketea</h2>
        </div>
        <div class="card">
            <h2>Pakete egoera</h2>
            <h3>Pakete ID-a:</h3>
            <div class="btn-container">
                <button class="btn btn-delivered">Entregatuta</button>
                <button class="btn btn-onway">Abian</button>
                <button class="btn btn-undelivered">Ez entregatua</button>
                <button class="btn btn-reason" onclick="openReasonModal()">Inzidentzia jarri</button>
            </div>
        </div>
        <div class="card">
            <h2>Entregatutako paketeak</h2>
        </div>
    </div>

    Modal
    <div id="myModal" class="modal">
        <span class="close" onclick="closeReasonModal()">&times;</span>
        <h2>Pakete entrega dezeztatua</h2>
        <h3>Inzidentzia adierazi:</h3>
        <textarea id="reason" rows="4" cols="30"></textarea><br>
        <button onclick="saveReason()" class="btn">Gorde</button>
    </div>
    <script src="js/scripta.js"></script>
    <script>
        function openReasonModal() {
            document.getElementById('myModal').style.display = "block";
        }

        function closeReasonModal() {
            document.getElementById('myModal').style.display = "none";
        }

        function saveReason() {
            var reason = document.getElementById('reason').value;
            alert("Inzidentzia jasota: " + reason);
            closeReasonModal();
        }
    </script>
</body>

</html>-->
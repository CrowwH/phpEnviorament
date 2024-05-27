<?php
$reason = $_POST['reason'];

// Conectar a la base de datos
$servername = "mysql";
$username = "root";
$password = "root";
$dbname = "paketeria";

$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Insertar datos en la base de datos
$sql = "INSERT INTO paketea (iruzkinak) VALUES ('$reason')";

if ($conn->query($sql) === true) {
    echo "Datos guardados correctamente";
} else {
    echo "Error al guardar datos: " . $conn->error;
}

$conn->close();


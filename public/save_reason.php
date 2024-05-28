<?php
$reason = $_POST['reason'];

// Datu basera konektatu
$servername = "mysql";
$username = "root";
$password = "root";
$dbname = "paketeria";

$conn = new mysqli($servername, $username, $password, $dbname);

// Konexioa konprobatu
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Datu-basean datuak txertatzea
$sql = "INSERT INTO paketea (iruzkinak) VALUES ('$reason')";

if ($conn->query($sql) === true) {
    echo "Datos guardados correctamente";
} else {
    echo "Error al guardar datos: " . $conn->error;
}

$conn->close();


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "mysql";
    $username = "root";
    $password = "root";
    $dbname = "paketeria";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $erabiltzailea = $_POST['erabiltzailea'];
    $pass = $_POST['pasahitza'];
    $nan = $_POST['nan'];
    $izena = $_POST['izena'];
    $abizena = $_POST['abizena'];
    $telefonoa = $_POST['telefonoa'];
    $herria = $_POST['herria'];
    $langile_mota = $_POST['langile_mota'] ??'';

    $sql = "UPDATE langileak SET 
            erabiltzailea = '$erabiltzailea', 
            pasahitza = '$pass', 
            izena = '$izena', 
            abizena = '$abizena',
            nan = '$nan',
            telefonoa = '$telefonoa', 
            herria = '$herria', 
            langile_mota = '$langile_mota'
            WHERE erabiltzailea = '$erabiltzailea'";
    
    if ($conn->query($sql) === TRUE) {
        echo "<div style='text-align: center; background-color: #63D140; border: 1px solid #c3e6cb; padding: 10px; margin-bottom: 20px;'>";
        echo "<strong>Datuak gorde dira! Itxaron 3 segundu...</strong>";
        echo "</div>";
        echo "<script>";
        echo "setTimeout(function() { window.history.go(-1); location.reload(); }, 3000);"; 
        echo "</script>";
    } else {
        echo "Errorea datuak gordetzerakoan" . $conn->error;
    }

    $conn->close();
} else {
    echo "Errorea, ez da ezer aurkitu";
}
?>

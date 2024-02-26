<?php
// Primero, verificamos si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "arte_martzialak";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Recoger los datos del formulario
    $izena = $_POST['izena'];
    $abizena = $_POST['abizena'];
    $korreoa = $_POST['korreoa'];
    $telefonoa = $_POST['telefonoa'];

    // Preparar y ejecutar la consulta SQL para insertar los datos en la tabla
    $sql = "INSERT INTO progila (Izena, Abizena, Korreoa, Telefonoa) VALUES ('$izena', '$abizena', '$korreoa', '$telefonoa')";

    if ($conn->query($sql) === TRUE) {
        echo "Erregistroa ongi gorde da.";
    } else {
        echo "Errorea: " . $sql . "<br>" . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erregistroa</title>
    <link rel="shortcut icon" href="img/karate.png" />
    <link rel="stylesheet" href="registro.css">
</head>
<body>
    <!-- Header -->
<header>
    <div class="kontainerra">
        <nav class="headerren-nav">
            <div class="logo-content">
                <a href="index.html"><img src="img/karate.png" alt="logo" class="nav-ikon" width="70" height="60" ></a>
                <div class="logo"></div>
            </div>
            <ul>
                <li>
                    <a href="#hasiera">Hasiera</a>
                </li>
                <li>
                    <a href="#guriburuz">Lehiaketak</a>
                </li>
                <li>
                    <a href="#lehiaketak">Klaseak</a>
                </li>
                <li>
                    <a href="#lantaldea">Harremana</a>
                </li>
                <li>
                    <a href="#kontaktua">Kategoriak</a>
                </li>
                <li>
                    <a href="#kategoriak">Kokapena</a>
                </li>
                <li>
                    <a href="registro.php">Erregistratu</a>
                </li>
                <li>
                    <a href="saioahasi.html"><img id="saioahasi" src="img/person.svg"></img></a>
                </li>
            </ul>
        </nav>
    </div>
</header>
    <div class="saioahasi">
        <form action="" class="form">
            <h1 class="title">Erregistroa</h1>
    
        <div class="inputContainer">
            <input type="text" class="input" placeholder="Nombre" name="Izena">
            <label for="" class="label">Izena</label>
        </div>
    
        <div class="inputContainer">
            <input type="text" class="input" placeholder="Apellido" name="Abizena">
            <label for="" class="label">Abizena</label>
        </div>
        
        <div class="inputContainer">
            <input type="tel" class="input" placeholder="Número de Teléfono" name="Telefonoa">
            <label for="" class="label">Telefono Zenbakia</label>
        </div>

        <div class="inputContainer">
            <input type="email" class="input" placeholder="Email" name="Korreoa">
            <label for="" class="label">Posta Elektronikoa</label>
        </div>   
        <p>Kontua duzu? Hasi Saioa <a href="saioahasi.html">hemen.</a></p>
        <input type="submit" class="submitBtn" value="Erregistratu">
        </form>
    </div>
</body>
</html>
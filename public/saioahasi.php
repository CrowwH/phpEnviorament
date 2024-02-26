<?php
// Variables para la conexión a la base de datos
$servername = "localhost"; // Puedes cambiar esto si tu base de datos está en otro servidor
$username = "root";
$password = "root";
$dbname = "arte_martzialak";

// Procesamiento del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['Izena']; // Asegúrate de que estos nombres coincidan con los atributos 'name' de tus inputs
    $contrasena = $_POST['Pasahitza'];

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Konexioa galdu da: " . $conn->connect_error);
    }

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO Erabiltzailea (erabiiltzaile_izena, pasahitza) VALUES ('$nombre', '$contrasena')";

    if ($conn->query($sql) === TRUE) {
        header("Location: registro.php");
        exit();
    } else {
        echo "Errorea: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saioa Hasi</title>
    <link rel="shortcut icon" href="img/karate.png" />
    <link rel="stylesheet" href="saioahasi.css">
</head>
<body>
    <!-- Header -->
<header class="headerra">
    <div class="kontainerra">
            <div class="logo-content">
                <a href="index.html"><img src="img/karate.png" alt="logo" class="nav-ikon" width="70" height="60"></a>
            </div>
    </div>
</header>
    <div class="signupFrm">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form">
            <h1 class="title">Saioa Hasi</h1>
    
        <div class="inputContainer">
            <input type="text" class="input" placeholder="Nombre" name="nombre">
            <label for="" class="label">Erabiltzailea</label>
        </div>
        <div class="inputContainer">
            <input type="password" class="input" placeholder="Contraseña" name="contrasena">
            <label for="" class="label">Pasahitza</label>
        </div>
            <input type="submit" class="submitBtn" value="Sartu">
        </form>
    </div>
</body>
</html>
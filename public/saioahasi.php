<?php
$servername = "mysql";
$username = "root";
$password = "root";
$dbname = "arte_martzialak";

// Establecer la conexión con la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die("<script>alert('Konexioak huts egin du: " . $conn->connect_error . "');</script>");
}

// Comprobar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $Erabiltzaile_izena = $_POST['Izena'];
    $Pasahitza = $_POST['Pasahitza'];
    
    // Preparar la consulta SQL para verificar las credenciales
    $sql = "SELECT * FROM erabiltzailea WHERE Izena='$Erabiltzaile_izena' AND Pasahitza='$Pasahitza'";
    
    // Ejecutar la consulta
    $result = $conn->query($sql);
    
    // Comprobar si se encontraron resultados
    if ($result->num_rows > 0) {
        // Inicio de sesión exitoso, redirigir al usuario a la página principal
        echo "<script>alert('Saioa ongi hasi da.'); window.location.href = 'index.php';</script>";
    } else {
        // Credenciales incorrectas, mostrar mensaje de error y establecer enfoque en el primer campo
        echo "<script>alert('Erabiltzailea edo pasahitza okerra.');";
        echo "document.getElementById('Izena').focus();</script>";
    }
    
    // Liberar el resultado
    $result->free_result();
    
    // Cerrar la conexión con la base de datos
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
            <input type="text" class="input" placeholder="Nombre" name="Izena">
            <label for="" class="label">Erabiltzailea</label>
        </div>
        <div class="inputContainer">
            <input type="password" class="input" placeholder="Contraseña" name="Pasahitza">
            <label for="" class="label">Pasahitza</label>
        </div>
            <input type="submit" class="submitBtn" value="Sartu">
        </form>
    </div>
</body>
</html>
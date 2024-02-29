<?php
$zerbitzaria = "mysql";
$erabiltzailea = "root";
$pasahitza = "root";
$dbname = "arte_martziala";

// Konexioa ezarri datu-basearekin
$conn = new mysqli($zerbitzaria, $erabiltzailea, $pasahitza, $dbname);

// Konexioa egiaztatu
if ($conn->connect_error) {
    die("<script>alert('Konexioak huts egin du: " . $conn->connect_error . "');</script>");
}

// Formularioa bidali den egiaztatu
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formularioaren datuak jaso
    $Erabiltzaile_izena = $_POST['Izena'];
    $Pasahitza = $_POST['Pasahitza'];
    
    // Kredentzialak egiaztatzeko SQL kontsulta prestatu
    $sql = "SELECT * FROM Erabiltzailea WHERE erabiltzaile_izena='$Erabiltzaile_izena' AND pasahitza='$Pasahitza'";
    
    // Kontsulta exekutatu
    $result = $conn->query($sql);
    
    // Emaitzak aurkitu diren egiaztatu
    if ($result && $result->num_rows > 0) {
        // Saioa ongi hasi da, erabiltzailea orrira bideratu
        echo "<script>alert('Saioa ongi hasi da.'); window.location.href = 'pribatua.php';</script>";
        exit(); // Bukaera exekuzioari jarraitu bideraketa gero
    } else {
        // Kredentzial okerrak, errore mezu bat erakutsi eta saioa hasierako orrira bideratu
        echo "<script>alert('Erabiltzailea edo pasahitza okerra.'); window.location.href = 'saioahasi.php';</script>";
        exit(); // Bukaera exekuzioari jarraitu bideraketa gero
    }
}

// Datu-basearekin konexioa itxi (formulario blokearen kanpoan)
$conn->close();
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
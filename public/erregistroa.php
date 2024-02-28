<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['izena']) && isset($_POST['abizena']) && isset($_POST['telefonoa']) && isset($_POST['korreoa'])) {

        $nombre = $_POST['izena'];
        $apellido = $_POST['abizena'];
        $telefono = $_POST['telefonoa'];
        $email = $_POST['korreoa'];

        $db = new mysqli("localhost", "root", "root", "arte_martzialak", 3308);

        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }

        $stmt = $db->prepare("INSERT INTO profila (izena, abizena, telefonoa, korreoa) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nombre, $apellido, $telefono, $email);

        if ($stmt->execute()) {
            $stmt->close();
            $db->close();
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
    }
} else {
    echo "Formularioaren datu guztik bete.";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erregistroa</title>
    <link rel="shortcut icon" href="img/karate.png" />
    <link rel="stylesheet" href="erregistroa.css">
</head>
<body>
    <!-- Header -->
    <header class="headerra">
        <div class="kontainerra">
            <nav class="headerren-nav" aria-label="navigation">
                <div class="logo-content">
                    <img src="img/karate.png" alt="Logo" class="nav-ikon" width="70" height="60">
                    <div class="logo">Arte Martzialak</div>
                </div>
                <img src="img/menu-hamburguesa.png" alt="navegazio icon" class="nav-hamburger" width="30" height="30"/>
                <ul class="menua">
                    <li>
                        <a href="index.html"><img src="img/casa.png" alt="home" width="30" height="30"></a>
                    </li>
                    <li>
                        <a href="#guburuz">About Us</a>
                    </li>
                    <li>
                        <a href="#kontaktua">Kontaktua/Kokapena</a>
                    </li>
                    <li>
                        <a href="erregistroa.php">Erregistroa</a>
                    </li>
                    <li>
                        <a href="saioahasi.php"><img src="img/person.svg"></a>
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
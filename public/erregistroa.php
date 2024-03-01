<?php
$zerbitzaria = "mysql";
$erabiltzailea = "root";
$pasahitza = "root";
$dbname = "arte_martzialak";

// Konexioa ezarri datu-basearekin
$conn = new mysqli($zerbitzaria, $erabiltzailea, $pasahitza, $dbname);

// Konexioa egiaztatu
if ($conn->connect_error) {
    die("<script>alert('Konexioak huts egin du: " . $conn->connect_error . "');</script>");
}

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica si todos los campos requeridos están presentes y no están vacíos
    $datosFaltantes = [];
    if (empty($_POST['ErabiltzaileIzena'])) $datosFaltantes[] = "Erabiltzaile Izena";
    if (empty($_POST['Pasahitza'])) $datosFaltantes[] = "Pasahitza";
    if (empty($_POST['Izena'])) $datosFaltantes[] = "Izena";
    if (empty($_POST['Abizena'])) $datosFaltantes[] = "Abizena";
    if (empty($_POST['Telefonoa'])) $datosFaltantes[] = "Telefonoa";
    if (empty($_POST['Korreoa'])) $datosFaltantes[] = "Korreoa";
    if (empty($_POST['Herria'])) $datosFaltantes[] = "Herria";
    if (empty($_POST['Herrialdea'])) $datosFaltantes[] = "Herrialdea";
    if (empty($_POST['Probintzia'])) $datosFaltantes[] = "Probintzia";

    if (empty($datosFaltantes)) {
        // Recoge los valores del formulario
        $erabiltzaile_izena = $_POST['ErabiltzaileIzena'];
        $pasahitza = $_POST['Pasahitza'];
        $izena = $_POST['Izena'];
        $abizena = $_POST['Abizena'];
        $telefonoa = $_POST['Telefonoa'];
        $korreoa = $_POST['Korreoa'];
        $herria = $_POST['Herria'];
        $herrialdea = $_POST['Herrialdea'];
        $probintzia = $_POST['Probintzia'];
        
        // Preparar la consulta SQL
        $sql = "INSERT INTO Erabiltzailea (erabiltzaile_izena, pasahitza, Izena, Abizena, Telefonoa, Korreoa, Herria, Herrialdea, Probintzia) 
                VALUES ('$erabiltzaile_izena', '$pasahitza', '$izena', '$abizena', '$telefonoa', '$korreoa', '$herria', '$herrialdea', '$probintzia')";
        
        // Ejecutar la consulta
        if ($conn->query($sql) === TRUE) {
            // Registro exitoso, redirige al index.php
            echo "<script>alert('Erregistroa ongi burutu da'); window.location.href = 'index.php';</script>";
            exit;
        } else {
            // Si hay un error, muestra un pop-up con el mensaje de error y redirige nuevamente a erregistroa.php
            echo "<script>alert('Errorea: " . $conn->error . "'); window.location.href = 'erregistroa.php';</script>";
            exit;
        }
    } else {
        // Si faltan datos, muestra un pop-up con un mensaje indicando los datos que faltan y redirige nuevamente a erregistroa.php
        $mensaje = "Ezin izan da erregistroa burutzeko, hurrengo datuak falta dira: " . implode(", ", $datosFaltantes);
        echo "<script>alert('$mensaje'); window.location.href = 'erregistroa.php';</script>";
        exit;
    }
}
?>
<!--Meter pop-up cuando se crea la cuenta y redirigir a la zona privada de la pagina web.-->
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
                <img src="img/menu-hamburguesa.png" alt="navegazio icon" class="nav-hamburger" width="30" height="30" />
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
        <form action="erregistroa.php" method="POST" class="form">
            <h1 class="title">Erregistroa</h1>
            <div class="inputContainer">
                <input type="text" class="input" placeholder="Erabiltzaile Izena" name="ErabiltzaileIzena">
                <label for="" class="label">Erabiltzaile Izena</label>
            </div>

            <div class="inputContainer">
                <input type="password" class="input" placeholder="Izena" name="Pasahitza">
                <label for="" class="label">Pasahitza ezarri</label>
            </div>

            <div class="inputContainer">
                <input type="text" class="input" placeholder="Izena" name="Izena">
                <label for="" class="label">Izena</label>
            </div>

            <div class="inputContainer">
                <input type="text" class="input" placeholder="Abizena" name="Abizena">
                <label for="" class="label">Abizena</label>
            </div>


            <div class="inputContainer">
                <input type="tel" class="input" placeholder="Telefono Zenbakia" name="Telefonoa">
                <label for="" class="label">Telefono Zenbakia</label>
            </div>

            <div class="inputContainer">
                <input type="email" class="input" placeholder="Email" name="Korreoa">
                <label for="" class="label">Posta Elektronikoa</label>
            </div>

            <div class="inputContainer">
                <input type="text" class="input" placeholder="Herria" name="Herria">
                <label for="" class="label">Herria</label>
            </div>

            <div class="inputContainer">
                <input type="text" class="input" placeholder="Herrialdea" name="Herrialdea">
                <label for="" class="label">Herrialdea</label>
            </div>

            <div class="inputContainer">
                <select class="input" name="Probintzia">
                    <option value="" disabled selected>Probintzia bat aukeratu</option>
                    <option value="Álava">Álava</option>
                    <option value="Albacete">Albacete</option>
                    <option value="Alicante">Alicante</option>
                    <option value="Almería">Almería</option>
                    <option value="Asturias">Asturias</option>
                    <option value="Ávila">Ávila</option>
                    <option value="Badajoz">Badajoz</option>
                    <option value="Barcelona">Barcelona</option>
                    <option value="Burgos">Burgos</option>
                    <option value="Cáceres">Cáceres</option>
                    <option value="Cádiz">Cádiz</option>
                    <option value="Cantabria">Cantabria</option>
                    <option value="Castellón">Castellón</option>
                    <option value="Ceuta">Ceuta</option>
                    <option value="Ciudad Real">Ciudad Real</option>
                    <option value="Córdoba">Córdoba</option>
                    <option value="Cuenca">Cuenca</option>
                    <option value="Girona">Girona</option>
                    <option value="Granada">Granada</option>
                    <option value="Guadalajara">Guadalajara</option>
                    <option value="Guipúzcoa">Guipúzcoa</option>
                    <option value="Huelva">Huelva</option>
                    <option value="Huesca">Huesca</option>
                    <option value="Illes Balears">Illes Balears</option>
                    <option value="Jaén">Jaén</option>
                    <option value="La Coruña">La Coruña</option>
                    <option value="La Rioja">La Rioja</option>
                    <option value="Las Palmas">Las Palmas</option>
                    <option value="León">León</option>
                    <option value="Lleida">Lleida</option>
                    <option value="Lugo">Lugo</option>
                    <option value="Madrid">Madrid</option>
                    <option value="Málaga">Málaga</option>
                    <option value="Melilla">Melilla</option>
                    <option value="Murcia">Murcia</option>
                    <option value="Navarra">Navarra</option>
                    <option value="Ourense">Ourense</option>
                    <option value="Palencia">Palencia</option>
                    <option value="Pontevedra">Pontevedra</option>
                    <option value="Salamanca">Salamanca</option>
                    <option value="Santa Cruz de Tenerife">Santa Cruz de Tenerife</option>
                    <option value="Segovia">Segovia</option>
                    <option value="Sevilla">Sevilla</option>
                    <option value="Soria">Soria</option>
                    <option value="Tarragona">Tarragona</option>
                    <option value="Teruel">Teruel</option>
                    <option value="Toledo">Toledo</option>
                    <option value="Valencia">Valencia</option>
                    <option value="Valladolid">Valladolid</option>
                    <option value="Vizcaya">Vizcaya</option>
                    <option value="Zamora">Zamora</option>
                    <option value="Zaragoza">Zaragoza</option>
                </select>
                <label for="" class="label">Probintzia</label>
            </div>
            <p>Kontua duzu? Hasi Saioa <a href="saioahasi.html">hemen.</a></p>
            <input type="submit" class="submitBtn" value="Erregistratu">
        </form>
    </div>
</body>

</html>
<?php
session_start();

/*if (!isset($_SESSION['userId'])) {
    header("Location: perfila.php");
    exit();
}*/
$servername = "mysql";
$username = "root";
$password = "root";
$dbname = "paketeria";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT l.nan, l.izena, l.abizena, l.erabiltzailea, l.pasahitza, l.herria, l.telefonoa, l.langile_mota
        FROM Langileak l
        WHERE l.erabiltzailea = '{$_SESSION['erabiltzailea']}'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();
    $nan = $row["nan"];
    $izena = $row["izena"];
    $abizena = $row["abizena"];
    $erabiltzailea = $row["erabiltzailea"];
    $pasahitza = $row["pasahitza"];
    $herria = $row["herria"];
    $telefonoa = $row["telefonoa"];
    $langile_mota = $row["langile_mota"];
} else {

    echo "Errorea: Ez da erabiltzailearen datarik aurkitu.";
}


$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gune Pribatua</title>
    <link rel="shortcut icon" href="img/logo erronka3.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="perfilaStyle.css">
</head>
<body>
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="D:\Eronka 3\phpEnviorament\public\assets\img\logo erronka3.png" alt="enpresarenLogo" class="logoa">
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="paketeak.html">Pakete entrega</a>
                </li>
                <li>
                    <a href="perfila.php">Perfila</a>
                </li>
            </ul>
        </nav>
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button"
                            data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                </div>
            </nav>
        </div>
    </div>
    <section id="datos_personales" class="section active">
        <div class="container">
            <div class="menua2">
            <ul>
                <li>
                    <a>Datu Pertsonalak</a>
                </li>
                </ul>
            </div>
            <form id="form_datos_personales" action="datuakgorde.php" method="post">
                <div class="input-group">
                    <label for="nan">DNI/NAN:</label>
                    <input type="text" id="nan" name="nan" value="<?php echo $nan; ?>" readonly>
                </div>
                <div class="input-group">
                    <label for="izena">Izena:</label>
                    <input type="text" id="izena" name="izena" value="<?php echo $izena; ?>"readonly>
                </div>
                <div class="input-group">
                    <label for="abizena">Abizena:</label>
                    <input type="text" id="abizena" name="abizena" value="<?php echo $abizena; ?>"readonly>
                </div>
                <div class="input-group">
                    <label for="erabiltzailea">Erabiltzaile izena:</label>
                    <input type="text" id="erabiltzailea" name="erabiltzailea" value="<?php echo $erabiltzailea; ?>"readonly>
                </div>
                <div class="input-group">
                    <label for="pasahitza">Pasahitza:</label>
                    <input type="password" id="pasahitza" name="pasahitza" value="<?php echo $pasahitza; ?>"readonly>
                </div>
                <div class="input-group">
                    <label for="korreoa">Herria:</label>
                    <input type="text" id="herria" name="herria" value="<?php echo $herria; ?>"readonly>
                </div>
                <div class="input-group">
                    <label for="telefonoa">Telefonoa:</label>
                    <input type="tel" id="telefonoa" name="telefonoa" value="<?php echo $telefonoa; ?>"readonly>
                </div>
                <div class="input-group">
                    <label for="helbidea">Langile Mota:</label>
                    <input type="text" id="langile_mota" name="langile_mota" value="<?php echo $langile_mota; ?>" readonly>
                </div>
                <script>
                    function enableEdit() {
                        var inputs = document.querySelectorAll("#form_datos_personales input");
                        for (var i = 0; i < inputs.length; i++) {
                            if (inputs[i].type !== "hidden") {
                                inputs[i].removeAttribute("readonly");
                            }
                        }
                        document.querySelector('button[name="save"]').style.display = "inline-block";
                    }
                    function cambiarSeccion(seccionId) {
                        var secciones = document.querySelectorAll('.section');
                        secciones.forEach(function(seccion) {
                            seccion.classList.remove('active');
                        });
                        var seccionSeleccionada = document.getElementById(seccionId);
                        seccionSeleccionada.classList.add('active');
                    }
                </script>
                <div class="btn-group">
                    <button type="submit" name="save" style="display: none;">Datuak Gorde</button>
                    <button type="button" onclick="enableEdit()">Datuak Aldatu</button>
                </div>
            </form>
        </div>
    </section>
    <script src="script.js"></script>
</body>
</html>
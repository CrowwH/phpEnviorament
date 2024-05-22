<?php
session_start();

$zerbitzaria = "mysql";
$erabiltzailea = "root";
$pasahitza = "root";
$dbname = "paketeria";

$conn = new mysqli($zerbitzaria, $erabiltzailea, $pasahitza, $dbname);

if ($conn->connect_error) {
    die("<script>alert('Konexioak huts egin du: " . $conn->connect_error . "');</script>");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $erabiltzailea = $_POST['izena'];
    $pasahitza = $_POST['pasahitza'];

    // Verificar si los campos están vacíos
    if (empty($erabiltzailea) || empty($pasahitza)) {
        echo "<script>alert('Erabiltzaile izena eta pasahitza bete behar dituzu.'); window.location.href = 'index.php';</script>";
        exit();
    }

    $sql = "SELECT * FROM Langileak WHERE erabiltzailea='$erabiltzailea' AND pasahitza='$pasahitza'";

    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['id_Langileak'] = $row['id_Langileak'];
        $_SESSION['erabiltzailea'] = $row['erabiltzailea'];
        $_SESSION['pasahitza'] = $row['pasahitza'];
        header("Location: dashboard.php");
        exit();
    } else {
        echo "<script>alert('Erabiltzailea edo pasahitza okerra.'); window.location.href = 'index.php';</script>";
        exit();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="ew">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pakAG Login</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/png" href="" />
    <link rel="stylesheet" href="assets/css/estiloak.css">
</head>

<body>
    <main>
        <div class="kontainerra__dena">
            <div class="back__boxa">
                <div class="back__boxa-logina">
                    <h3>¿Jada kontua duzu?</h3>
                    <p>Saioa hasi paginara abiatzeko</p>
                    <button id="btn__iniciar-sesion">Saioa hasi</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Ez duzu kontua oraindik?</h3>
                    <p>Registraru saioa hasteko</p>
                    <button id="btn__registrarse">Registratu</button>
                </div>
            </div>

            <!--Erregistroko eta Logineko formularioa-->
            <div class="contenedor__login-register">
                <!--Logina-->
                <form action="" method="post" class="formulario__login" onsubmit="return validarFormulario()">
                    <h2>Saioa hasi</h2>
                    <input type="text" placeholder="Erabiltzaile izena" name="izena">
                    <input type="password" placeholder="Pasahitza" name="pasahitza">
                    <button>Sartu</button>
                </form>
                <script>
                    function validarFormulario() {
                        var pasahitzaInput = document.getElementById("pasahitza");
                        var pasahitza = pasahitzaInput.value;

                        if (pasahitza.length > 9) {
                            alert("Pasahitza 8 karaktere baino gutxiago ezin du eduki.");
                            return false;
                        }
                        return true;
                    }
                </script>
                <!--Registeroa-->
                <form action="" class="formulario__register">
                    <h2>Registratu</h2>
                    <input type="text" placeholder="Izen-Abizena">
                    <input type="text" placeholder="Email-a">
                    <input type="password" placeholder="Pasahitza">
                    <button>Registratu</button>
                </form>
            </div>
        </div>
    </main>
    <script src="assets/js/scripta.js"></script>
</body>
</html>
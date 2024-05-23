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
    if (isset($_POST['register'])) {
        // Erregistro Kodea
        $id = $_POST['id'];
        $erabiltzailea = $_POST['izena'];
        $pasahitza = password_hash($_POST['pasahitza'], PASSWORD_BCRYPT);

        // Ziurtatu langile id-a existitzen den
        $sql = "SELECT * FROM Langileak WHERE id_Langilea = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Langile id-a existitzen badu taula berritu
            $update_sql = "UPDATE Langileak SET erabiltzailea = ?, pasahitza = ? WHERE id_Langilea = ?";
            $update_stmt = $conn->prepare($update_sql);
            $update_stmt->bind_param("ssi", $erabiltzailea, $pasahitza, $id);

            if ($update_stmt->execute()) {
                echo "<script>alert('Erregistro arrakastatsua. Saioa has dezakezu orain!'); window.location.href = 'index.php';</script>";
            } else {
                echo "<script>alert('Errorea erabiltzailea erregistratzean. Mesedez, saiatu berriro.'); window.location.href = 'index.php';</script>";
            }
        } else {
            echo "<script>alert('Langilearen ID ez da aurkitu. Mesedez, egiaztatu eta saiatu berriro.'); window.location.href = 'index.php';</script>";
        }

        $stmt->close();
    } else {
        // Saioa hasi kodea
        $erabiltzailea = $_POST['izena'];
        $pasahitza = $_POST['pasahitza'];

        // Eremuak hutsik ez daudela egiaztatzea
        if (empty($erabiltzailea) || empty($pasahitza)) {
            echo "<script>alert('Erabiltzaile izena eta pasahitza bete behar dituzu.'); window.location.href = 'index.php';</script>";
            exit();
        }

        $sql = "SELECT * FROM Langileak WHERE erabiltzailea=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $erabiltzailea);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($pasahitza, $row['pasahitza'])) {
                $_SESSION['id_Langilea'] = $row['id_Langilea'];
                $_SESSION['erabiltzailea'] = $row['erabiltzailea'];
                header("Location: dashboard.php");
                exit();
            } else {
                echo "<script>alert('Erabiltzailea edo pasahitza okerra.'); window.location.href = 'index.php';</script>";
                exit();
            }
        } else {
            echo "<script>alert('Erabiltzailea edo pasahitza okerra.'); window.location.href = 'index.php';</script>";
            $stmt->close();
            $conn->close();
            exit();
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="eu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pakAG Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon"" href="public\assets\img\logo erronka3.png" />
    <link rel="stylesheet" href="assets/css/estiloak.css">
</head>

<body>
    <main>
        <div class="kontainerra__dena">
            <div class="back__boxa">
                <div class="back__boxa-logina">
                    <h3>¿Jada kontua duzu?</h3>
                    <p>Saioa hasi orrialdera abiatzeko</p>
                    <button id="btn__iniciar-sesion">Saioa hasi</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Ez duzu kontua oraindik?</h3>
                    <p>Erregistratu saioa hasteko</p>
                    <button id="btn__registrarse">Erregistratu</button>
                </div>
            </div>

            <!--Erregistroko eta Logineko formularioa-->
            <div class="contenedor__login-register">
                <!--Logina-->
                <form action="index.php" method="post" class="formulario__login" onsubmit="return validarFormulario()">
                    <h2>Saioa hasi</h2>
                    <input type="text" placeholder="Erabiltzaile izena" name="izena" required>
                    <input type="password" placeholder="Pasahitza" name="pasahitza" required>
                    <button type="submit" name="login">Sartu</button>
                </form>
                <!--Erregistroa-->
                <form action="index.php" method="post" class="formulario__register" onsubmit="return validarFormulario()">
                    <h2>Erregistratu</h2>
                    <input type="text" placeholder="Banatzaile ID" name="id" required>
                    <input type="text" placeholder="Erabiltzaile izena" name="izena" required>
                    <input type="password" placeholder="Pasahitza" name="pasahitza" rel>
                    <button type="submit" name="register">Erregistratu</button>
                </form>
                <script>
                    function validarFormulario() {
                        var pasahitzaInput = document.getElementById("pasahitza");
                        var pasahitza = pasahitzaInput.value;

                        if (pasahitza.length < 8) {
                            alert("Pasahitza 8 karaktere baino gutxiago ezin du eduki.");
                            return false;
                        }
                        return true;
                    }
                </script>
            </div>
        </div>
    </main>
    <script src="assets/js/scripta.js"></script>
</body>
</html>
<?php
session_start();

// Establecer la conexión a la base de datos (reemplaza los valores según tu configuración)
$servername = "mysql";
$username = "root";
$password = "root";
$database = "paketeria";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Manejar el almacenamiento de paquetes en progreso
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['startDelivery'])) {
        $packageId = $_POST['id_Paketea'];
        // Almacenar el paquete en progreso en la sesión
        $_SESSION['inProgressPackage'] = $packageId;
        echo json_encode(['status' => 'success']);
        exit;
    }
    if (isset($_POST['removeInProgress'])) {
        // Eliminar el paquete en progreso de la sesión
        unset($_SESSION['inProgressPackage']);
        echo json_encode(['status' => 'success']);
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gune Pribatua</title>
    <link rel="shortcut icon" href="img/logo erronka3.png" />
    <link rel="stylesheet" href="paketeak.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <!--Header-->
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="dashboard.php"><img src="img/logo erronka3.png" alt="enpresarenLogo" class="logoa"></a>
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="paketeak.php">Pakete entrega</a>
                </li>
                <li>
                    <a href="perfila.php">Perfila</a>
                </li>
            </ul>
        </nav>
    </div>

    <!---Edukia-->
    <div class="card-container">

        <div class="card">
            <h2>Banatu beharreko paketeak:</h2>
            <br />
            <?php
            // Saioa hasi duen erabiltzailearen ID lortu
            $id_langilea = $_SESSION['id_Langilea'];

            // SQL kontsulta, erabiltzailearen paketeak adierazpen prestatuak erabiliz lortzeko
            $stmt = $conn->prepare("SELECT * FROM paketea WHERE id_Langilea = ?");
            $stmt->bind_param("i", $id_langilea);
            $stmt->execute();
            $result = $stmt->get_result();

            // Emaitzarik aurkitu den egiaztatzea
            if ($result->num_rows > 0) {
                $counter = 1; // Hasi kontagailua
                // Erakutsi erabiltzailearen paketeak botoi gisa
                while ($row = $result->fetch_assoc()) {
                    // Sortu botoi bat pakete bakoitzerako, JSON formatuko paketearen informazioa duen data-info atributuarekin
                    echo '<button class="package-btn" data-info=\'' . json_encode($row) . '\' data-id="' . $row["id_Paketea"] . '">Paketea ' . $counter . '</button><br>';
                    $counter++;
                }
            } else {
                echo "Ez daude peketerik erabiltzaile honetarako.";
            }
            // Konexioa itxi
            $stmt->close();
            $conn->close();
            ?>
            <div id="package-info" style="display: none;">
                <h3>Paketearen Deskribapena:</h3>
                <p id="package-details"></p>
                <button id="hide-info-btn">Ikusteari Utzi</button>
                <button id="start-delivery-btn" class="btn btn-onway">Banatu</button>
            </div>
        </div>

        <div class="card">
            <h2>Abian dagoen Paketea</h2>
            <div id="in-progress-package">
                <?php
                // Verificar si hay un paquete en progreso en la sesión
                if (isset($_SESSION['inProgressPackage'])) {
                    $packageId = $_SESSION['inProgressPackage'];

                    // Obtener los detalles del paquete en progreso
                    $stmt = $conn->prepare("SELECT * FROM paketea WHERE id_Paketea = ?");
                    $stmt->bind_param("i", $packageId);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo '<p>Pakete ID-a: ' . $row['id_Paketea'] . '</p>';
                        echo '<p>Entregatze Helbidea: ' . $row['entregatze_helbidea'] . '</p>';
                        echo '<p>Entregatze Data: ' . $row['entregatze_data'] . '</p>';
                    }
                    $stmt->close();
                }
                ?>
            </div>
            <div class="btn-container">
                <button class="btn btn-delivered">Entregatuta</button>
                <button class="btn btn-undelivered">Ez entregatua</button>
                <button class="btn btn-reason" onclick="openReasonModal()">Inzidentzia jarri</button>
            </div>
        </div>
        <script>
            // Obtener todos los botones de paquetes
            const buttons = document.querySelectorAll('.package-btn');

            // Obtener elementos del DOM
            const packageInfoDiv = document.getElementById('package-info');
            const packageDetails = document.getElementById('package-details');
            const hideInfoBtn = document.getElementById('hide-info-btn');
            const startDeliveryBtn = document.getElementById('start-delivery-btn');
            const inProgressPackageDiv = document.getElementById('in-progress-package');

            // Variable para almacenar la información del paquete actual
            let currentPackageInfo = null;
            let currentPackageButton = null;

            // Agregar un evento de clic a cada botón de paquete
            buttons.forEach(button => {
                button.addEventListener('click', function () {
                    // Obtener la información del paquete del atributo data-info
                    const info = JSON.parse(this.getAttribute('data-info'));
                    currentPackageInfo = info; // Guardar la información del paquete actual
                    currentPackageButton = this; // Guardar el botón actual

                    // Mostrar la información del paquete en el div
                    packageDetails.innerHTML =
                        '<p>Pakete ID-a: ' + info.id_Paketea + '</p>' +
                        '<p>Entregatze Helbidea: ' + info.entregatze_helbidea + '</p>' +
                        '<p>Entregatze Data: ' + info.entregatze_data + '</p>';

                    // Hacer visible el div de información del paquete
                    packageInfoDiv.style.display = 'block';
                });
            });

            // Evento para el botón "Dejar de ver"
            hideInfoBtn.addEventListener('click', function () {
                packageInfoDiv.style.display = 'none';
                currentPackageInfo = null; // Limpiar la información del paquete actual
                currentPackageButton = null; // Limpiar el botón actual
            });

            // Evento para el botón "Banatu"
            startDeliveryBtn.addEventListener('click', function () {
                if (currentPackageInfo && currentPackageButton) {
                    // Mover la información del paquete al div de "Abian dagoen Paketea"
                    inProgressPackageDiv.innerHTML =
                        '<p>Pakete ID-a: ' + currentPackageInfo.id_Paketea + '</p>' +
                        '<p>Entregatze Helbidea: ' + currentPackageInfo.entregatze_helbidea + '</p>' +
                        '<p>Entregatze Data: ' + currentPackageInfo.entregatze_data + '</p>';

                    // Eliminar el botón del paquete de "Banatu beharreko paketeak"
                    currentPackageButton.remove();

                    // Guardar el estado en la sesión
                    fetch('paketeak.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded'
                        },
                        body: 'startDelivery=true&packageId=' + currentPackageInfo.id_Paketea
                    }).then(response => response.json()).then(data => {
                        if (data.status === 'success') {
                            console.log('Estado guardado en la sesión.');
                        }
                    });

                    // Ocultar el div de información del paquete
                    packageInfoDiv.style.display = 'none';
                    currentPackageInfo = null; // Limpiar la información del paquete actual
                    currentPackageButton = null; // Limpiar el botón actual
                }
            });
        </script>
        <div class="card">
            <h2>Entregatutako paketeak</h2>
        </div>
    </div>

    <!---Modal--->
    <div id="myModal" class="modal">
        <span class="close" onclick="closeReasonModal()">&times;</span>
        <h2>Pakete entrega dezeztatua</h2>
        <h3>Inzidentzia adierazi:</h3>
        <textarea id="reason" rows="4" cols="30"></textarea><br>
        <button onclick="saveReason()" class="btn custom-btn">Gorde</button>
    </div>
    <script src="js/scripta.js"></script>
    <script>
        function openReasonModal() {
            document.getElementById('myModal').style.display = "block";
        }

        function closeReasonModal() {
            document.getElementById('myModal').style.display = "none";
        }

        function saveReason() {
            var reason = document.getElementById('reason').value;
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "save_reason.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    alert("Inzidentzia jasota: " + reason);
                }
            };
            xhr.send("reason=" + reason);
        }
    </script>
</body>
</html>

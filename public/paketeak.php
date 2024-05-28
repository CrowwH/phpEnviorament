<?php
session_start();

// Datu-baserako konexioa ezartzea (aldatu balioak zure konfigurazioaren arabera)
$servername = "mysql";
$username = "root";
$password = "root";
$database = "paketeria";

// Konexioa sortu
$conn = new mysqli($servername, $username, $password, $database);

// Konexioa berifikatu
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Aurrera doazen paketeen biltegiratzea maneiatzea
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['startDelivery'])) {
        $packageId = $_POST['id_Paketea'];
        $_SESSION['inProgressPackage'] = $packageId;
        echo json_encode(['status' => 'success']);
        exit;
    }
    if (isset($_POST['removeInProgress'])) {
        unset($_SESSION['inProgressPackage']);
        echo json_encode(['status' => 'success']);
        exit;
    }
    if (isset($_POST['completeDelivery'])) {
        $packageId = $_POST['id_Paketea'];
        $stmt = $conn->prepare("UPDATE paketea SET egoera = 'entregatuta' WHERE id_Paketea = ?");
        $stmt->bind_param("i", $packageId);
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error']);
        }
        $stmt->close();
        exit;
    }
    if (isset($_POST['cancelDelivery'])) {
        $packageId = $_POST['id_Paketea'];
        $reason = $_POST['iruzkinak'];
        $stmt = $conn->prepare("UPDATE paketea SET iruzkinak = ?, egoera = 'dezeztatu' WHERE id_Paketea = ?");
        $stmt->bind_param("si", $reason, $packageId);
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error']);
        }
        $stmt->close();
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
            $stmt = $conn->prepare("SELECT * FROM paketea WHERE id_Langilea = ? AND egoera = 'abian'");
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
                <button id="start-delivery-btn" class="btn btn-onway">Abian</button>
                <button id="delivery-completed-btn" class="btn btn-success">Entregatu</button>
                <button id="cancel-delivery-btn" class="btn btn-danger">Dezeztatu</button>
            </div>
        </div>
        <div class="card">
            <h2>Abian dagoen Paketea</h2>
            <div id="in-progress-package">
                <?php
                // Saioan aurrera doan pakete bat dagoen egiaztatzea
                if (isset($_SESSION['inProgressPackage'])) {
                    $packageId = $_SESSION['inProgressPackage'];

                    // Aurrera doan paketearen xehetasunak lortu
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
        </div>
        <div class="card">
            <h2>Entregatutako paketeak</h2>
            <div id="delivered-packages"></div>
        </div>
        <script src="js/infopakete.js"></script>
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
    <script src="js/modal.js"></script>
</body>
</html>

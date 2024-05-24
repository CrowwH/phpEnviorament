<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gune Pribatua</title>
    <link rel="shortcut icon" href="assets/img/logo erronka3.png" />
    <link rel="stylesheet" href="paketeak.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="assets/img/logo erronka3.png" alt="enpresarenLogo" class="logoa">
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
    <div class="card-container">
        <div class="card">
            <h2>Banatu beharreko paketeak:</h2>
            <?php
            // Conexión a la base de datos
            $servername = "mysql";
            $username = "root";
            $password = "root";
            $dbname = "paketeria";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }

            // Consulta SQL para obtener los paquetes en curso
            $sql = "SELECT id_Paketea, id_Langilea, id_Bezeroa, entregatze_data, irteera_data, inzidentzia, egoera FROM Paketea WHERE egoera = 'abian'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<ul>";
                while ($row = $result->fetch_assoc()) {
                    echo "<li>Paquete ID: " . $row["id_Paketea"] . " - Cliente ID: " . $row["id_Bezeroa"] . " - Fecha de Entrega: " . $row["entregatze_data"] . "</li>";
                }
                echo "</ul>";
            } else {
                echo "No hay paquetes en curso.";
            }

            $conn->close();
            ?>
        </div>
        <div class="card">
            <h2>Abian dagoen Paketea</h2>
            <!-- Aquí puedes agregar más contenido relacionado con los paquetes en curso -->
        </div>
        <div class="card">
            <h2>Pakete egoera</h2>
            <h3>Pakete ID-a:</h3>
            <div class="btn-container">
                <button class="btn btn-delivered">Entregatuta</button>
                <button class="btn btn-onway">Abian</button>
                <button class="btn btn-undelivered">Ez entregatua</button>
                <button class="btn btn-reason" onclick="openReasonModal()">Inzidentzia jarri</button>
            </div>
        </div>
        <div class="card">
            <h2>Entregatutako paketeak</h2>
            <?php
            // Conexión a la base de datos
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }

            // Consulta SQL para obtener los paquetes entregados
            $sql = "SELECT id_Paketea, id_Langilea, id_Bezeroa, entregatze_data, irteera_data, inzidentzia, egoera FROM Paketea WHERE egoera = 'entregatuta'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<ul>";
                while ($row = $result->fetch_assoc()) {
                    echo "<li>Paquete ID: " . $row["id_Paketea"] . " - Cliente ID: " . $row["id_Bezeroa"] . " - Fecha de Entrega: " . $row["entregatze_data"] . "</li>";
                }
                echo "</ul>";
            } else {
                echo "No hay paquetes entregados.";
            }

            $conn->close();
            ?>
        </div>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal">
        <span class="close" onclick="closeReasonModal()">&times;</span>
        <h2>Pakete entrega dezeztatua</h2>
        <h3>Inzidentzia adierazi:</h3>
        <textarea id="reason" rows="4" cols="30"></textarea><br>
        <button onclick="saveReason()" class="btn">Gorde</button>
    </div>
    <script src="assets/js/scripta.js"></script>
    <script>
        function openReasonModal() {
            document.getElementById('myModal').style.display = "block";
        }

        function closeReasonModal() {
            document.getElementById('myModal').style.display = "none";
        }

        function saveReason() {
            var reason = document.getElementById('reason').value;
            alert("Inzidentzia jasota: " + reason);
            closeReasonModal();
        }
    </script>
</body>

</html>

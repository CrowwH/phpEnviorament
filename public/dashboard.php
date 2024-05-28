<?php
// Datu-baserako konexioa (baldin eta konexioa ezarrita badaukazu)
session_start();

$zerbitzaria = "mysql";
$erabiltzailea = "root";
$pasahitza = "root";
$dbname = "paketeria";

$conn = new mysqli($zerbitzaria, $erabiltzailea, $pasahitza, $dbname);

if ($conn->connect_error) {
    die("<script>alert('Konexioak huts egin du: " . $conn->connect_error . "');</script>");
}

// Eskatutako datuak lortzeko SQL kontsultak
$query_pakete_kantitatea = "SELECT COUNT(*) AS total FROM paketea";
$query_banatutako_paketeak = "SELECT COUNT(*) AS total FROM paketea WHERE entregatze_data IS NOT NULL AND entregatze_data <= CURDATE()";
$query_hilean_banatutako_paketeak = "SELECT COUNT(*) AS total FROM paketea WHERE MONTH(entregatze_data) = MONTH(CURRENT_DATE())";
$query_entregatu_beharreko_paketeak = "SELECT COUNT(*) AS entregatu_beharreko_paketeak FROM paketea WHERE id_langilea=2";

// Kontsultak gauzatzea
$resultado_pakete_kantitatea = $conn->query($query_pakete_kantitatea);
$resultado_banatutako_paketeak = $conn->query($query_banatutako_paketeak);
$resultado_hilean_banatutako_paketeak = $conn->query($query_hilean_banatutako_paketeak);
$result_entregatu_beharreko_paketeak = $conn->query($query_entregatu_beharreko_paketeak);

// Kontsultetan akatsak daudela egiaztatzea
if (!$resultado_pakete_kantitatea || !$resultado_banatutako_paketeak || !$resultado_hilean_banatutako_paketeak || !$result_entregatu_beharreko_paketeak) {
    die("<script>alert('Errorea gertatu da konsultak egiten: " . $conn->error . "');</script>");
}

// Balioak lortu
$pakete_kantitatea = $resultado_pakete_kantitatea->fetch_assoc()["total"];
$banatutako_paketeak = $resultado_banatutako_paketeak->fetch_assoc()["total"];
$hilean_banatutako_paketeak = $resultado_hilean_banatutako_paketeak->fetch_assoc()["total"];
$row_entregatu_beharreko_paketeak = $result_entregatu_beharreko_paketeak->fetch_assoc();

// Emaitzak itxi
$resultado_pakete_kantitatea->close();
$resultado_banatutako_paketeak->close();
$resultado_hilean_banatutako_paketeak->close();
$result_entregatu_beharreko_paketeak->close();
// Konexioa itxi
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Repartidor</title>
    <link rel="shortcut icon" href="img\logo erronka3.png" type="image/png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="dashboardStyle.css">
</head>

<body>
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
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Pakete Kantitatea</h5>
                                <h2 class="card-text"><?php echo $pakete_kantitatea; ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Entregatu Beharreko Paketeak</h5>
                                <h2 class="card-text">
                                    <?php echo $row_entregatu_beharreko_paketeak['entregatu_beharreko_paketeak']; ?>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Banatutako Paketeak</h5>
                                <h2 class="card-text"><?php echo $banatutako_paketeak; ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Hilean Banatutako Paketeak</h5>
                                <h2 class="card-text"><?php echo $hilean_banatutako_paketeak; ?></h2>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-12 mb-4">
                        <marquee behavior="scroll" direction="left" scrollamount="6">
                            <?php
                            // Lortu denboraren pronostikoa OpenWeatherMap-eko APIa erabiliz
                            $api_key = 'c6d20a1dfec83e4a941b1b14332c0e5e';
                            $city_name = 'Tolosa';
                            $api_url = "http://api.openweathermap.org/data/2.5/forecast?q=$city_name&appid=$api_key&units=metric";
                            $response = file_get_contents($api_url);
                            $data = json_decode($response, true);

                            //Egiaztatu baliozko erantzunik jaso den
                            if ($data && isset($data['list'])) {
                                // Atera hurrengo egunetarako iragarpenaren informazioa
                                $weather_forecast = [];
                                foreach ($data['list'] as $item) {
                                    $date = date('l', strtotime($item['dt_txt']));
                                    $weather_description = $item['weather'][0]['description'];
                                    $temperature = $item['main']['temp'];
                                    $weather_forecast[$date] = [
                                        'description' => $weather_description,
                                        'temperature' => $temperature
                                    ];
                                }

                                // Eguraldiaren pronostikoa erakusten du
                                echo '<marquee behavior="scroll" direction="left" scrollamount="4">';
                                foreach ($weather_forecast as $day => $forecast) {
                                    echo "$day: " . $forecast['description'] . ", Temp: " . $forecast['temperature'] . "°C | ";
                                }
                                echo '</marquee>';
                            } else {
                                // Errore mezu bat erakusten du ezin izan bada denboraren pronostikoa lortu
                                echo 'No se pudo obtener el pronóstico del tiempo.';
                            }
                            ?>
                        </marquee>
                    </div>
                    <div class="col-lg-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Grafiko</h5>
                                <canvas id="grafiko"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('grafiko').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Pakete Kantitatea', 'Banatutako Paketeak', 'Hilean Banatutako Paketeak'],
                datasets: [{
                    label: 'Estatistikak',
                    data: [<?php echo $pakete_kantitatea; ?>, <?php echo $banatutako_paketeak; ?>, <?php echo $hilean_banatutako_paketeak; ?>],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    <script src="js/scripta.js"></script>
</body>
</html>

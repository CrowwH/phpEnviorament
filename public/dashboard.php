<!DOCTYPE html>
<html lang="es">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Repartidor</title>
    <link rel="shortcut icon" href="public\assets\img\logo erronka3.png" type="image/png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="dashboardStyle.css">
</head>
<body>
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
            <a href="dashboard.php" ><img src="img/logo erronka3.png" alt="enpresarenLogo" class="logoa" ></a>
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="paketeak.php">Pakete entrega</a>
                </li>
                <li>
                    <a href="perfila.php">Perfila</a>
                </li>
                <button type="button" class="logout">Saioa Itxi</button>
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
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Pakete Kantitatea</h5>
                                <h2 class="card-text">71</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Banatutako Paketeak</h5>
                                <h2 class="card-text">9</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Hilean Banatutako Paketeak</h5>
                                <h2 class="card-text">500</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Banatzaileak Online</h5>
                                <h2 class="card-text">3</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Hilabetero Banatutako Paketeak</h5>
                                <canvas id="salesChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Geratzen Diren Paketeen Egoera</h5>
                                <canvas id="ordersChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Pakete Lista</h5>
                                <ul id="packages-list" class="list-group">
                                    <li class="list-group-item" data-id="1">Pakete 1</li>
                                    <li class="list-group-item" data-id="2">Pakete 2</li>
                                    <li class="list-group-item" data-id="3">Pakete 3</li>
                                    <li class="list-group-item" data-id="4">Pakete 4</li>
                                    <li class="list-group-item" data-id="5">Pakete 5</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Paketeen Urratsak</h5>
                                <div>
                                    <p><strong>Helbidea:</strong> <span id="location">-</span></p>
                                    <p><strong>Geratzen diren geltokiak:</strong> <input type="number" id="stops" value="0" class="form-control"></p>
                                    <p><strong>Pakete Egoera:</strong> 
                                        <select id="status" class="form-control">
                                            <option value="pendiente">Pendiente</option>
                                            <option value="abian">Abian</option>
                                            <option value="entregatuta">Entregatuta</option>
                                        </select>
                                    </p>
                                    <button id="update-details" class="btn btn-primary">Detalleak aldatu</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="public\assets\js\scripta.js"></script>
</body>
</html>
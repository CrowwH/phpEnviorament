<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Privada</title>
    <link rel="shortcut icon" href="img/karate.png" />
    <link rel="stylesheet" href="pribatua.css">
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
                <ul class="menua">
                    <li>
                        <a href="index.php"><img src="img/casa.png" alt="home" width="30" height="30"></a>
                    </li>
                    <li>
                        <a href="index.php">Guri Buruz</a>
                    </li>
                    <li>
                        <a href="index.php">Kontaktua/Kokapena</a>
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
    <!-- Datos Personales -->
    <section id="datos_personales" class="section active">
        <div class="container">
            <div class="menua2">
                <ul>
                    <li>
                        <a href="#datos_personales">Datos Personales</a>
                    </li>
                    <li>
                        <a href="#resultados">Resultados</a>
                    </li>
                    <li>
                        <a href="#pagos">Pagos</a>
                    </li>
                </ul>
            </div>
            <form id="form_datos_personales">
                <?php
                    $conexion = new mysqli("mydb", "root", "root", "arte_martzialak");
                    if ($conexion->connect_error) {
                        die("La conexión falló: " . $conexion->connect_error);
                    }

                    $sql = "SELECT * FROM Erabiltzailea WHERE ID = 1"; // Cambia "tabla" por el nombre de tu tabla y "id = 1" por el criterio que desees
                    $resultado = $conexion->query($sql);

                    if ($resultado->num_rows > 0) {
                        // Mostrar los datos en el formulario
                        $fila = $resultado->fetch_assoc();
                ?>
                            <div class="input-group">
                                <label for="dni">DNI/NAN:</label>
                                <input type="text" id="dni" name="dni" value="<?php echo $fila['dni']; ?>">
                            </div>
                            <div class="input-group">
                                <label for="izena">Izena:</label>
                                <input type="text" id="izena" name="izena" value="<?php echo $fila['izena']; ?>">
                            </div>
                            <div class="input-group">
                                <label for="E.izena">Erabiltzaile Izena:</label>
                                <input type="text" id="E.izena" name="E.izena" value="<?php echo $fila['E.izena']; ?>">
                            </div>
                            <!-- Repite este proceso para los demás campos -->
                <?php
                    } else {
                        echo "No se encontraron resultados.";
                    }

                    // Cerrar la conexión
                    $conexion->close();
                ?>
                <div class="input-group">
                    <label for="dni">DNI/NAN:</label>
                    <input type="text" id="dni" name="dni">
                </div>
                <div class="input-group">
                    <label for="izena">Izena:</label>
                    <input type="text" id="izena" name="izena">
                </div>
                <div class="input-group">
                    <label for="E.izena">Erabiltzaile izena:</label>
                    <input type="text" id="E.izena" name="E.izena">
                </div>
                <div class="input-group">
                    <label for="pasahitza">Pasahitza:</label>
                    <input type="password" id="pasahitza" name="pasahitza">
                </div>
                <div class="input-group">
                    <label for="jaiotze_data">Jaiotze data</label>
                    <input type="date" id="jaiotze_data" name="jaiotze_data">
                </div>
                <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="input-group">
                    <label for="sexua">Sexua:</label>
                    <input type="text" id="sexua" name="sexua">
                </div>
                <div class="input-group">
                    <label for="telefonoa">Telefonoa:</label>
                    <input type="tel" id="telefonoa" name="telefonoa">
                </div>
                <div class="input-group">
                    <label for="Helbidea">Helbidea:</label>
                    <input type="text" id="Helbidea" name="Helbidea">
                </div>
                <div class="input-group">
                    <label for="Herria">Herria:</label>
                    <input type="text" id="Herria" name="Herria">
                </div>
                <div class="input-group">
                    <label for="posta_kodea">Posta Kodea:</label>
                    <input type="text" id="posta_kodea" name="posta_kodea">
                </div>
                <div class="input-group">
                    <label for="Probintzia">Probintzia:</label>
                    <input type="text" id="Probintzia" name="Probintzia">
                </div>
                <div class="input-group">
                    <label for="Herrialdea">Herrialdea:</label>
                    <input type="text" id="Herrialdea" name="Herrialdea">
                </div>
                <div class="input-group">
                    <label for="kontu_korrontea">Kontu korrontea:</label>
                    <input type="text" id="kontu_korrontea" name="kontu_korrontea">
                </div>

                <div class="btn-group">
                    <button type="submit">Datuak Gorde</button>
                    <button>Datuak Aldatu</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Resultados -->
    <section id="resultados" class="section">
        <div class="container">
            <div class="container">
                <div class="menua2">
                    <ul>
                        <li>
                            <a href="#datos_personales">Datos Personales</a>
                        </li>
                        <li>
                            <a href="#resultados">Resultados</a>
                        </li>
                        <li>
                            <a href="#pagos">Pagos</a>
                        </li>
                    </ul>
                </div>
            <h2>Resultados</h2>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>JORNADA</th>
                            <th>Pisua</th>
                            <th>Borrokalaria 1</th>
                            <th>Borrokalaria 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>18/02/2024</td>
                            <td>-88 kg</td>
                            <td>Peio Errasti</td>
                            <td>iker Hernandez</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Pagos -->
    <section id="pagos" class="section">
        <div class="container">
            <div class="container">
                <div class="menua2">
                    <ul>
                        <li>
                            <a href="#datos_personales">Datos Personales</a>
                        </li>
                        <li>
                            <a href="#resultados">Resultados</a>
                        </li>
                        <li>
                            <a href="#pagos">Pagos</a>
                        </li>
                    </ul>
                </div>
            <h2>Ordainketa</h2>
    </section>
    <script src="pribatua.js"></script>

    <!--Footer-->
    <footer class="section-footer" id="footer">
        <div class="footer-box container">
            <div class="contact-details">
                <h2>Tolosako Arte Martzial eskola</h2>
                <div class="contact-company-address">
                    Santa Luzia 17,<br />
                    20400 Tolosa, Gipuzkoa<br />España
                </div>
                <div class="contact-social-links">
                    <img src="https://vfitclub.netlify.app/image/whatsapp.svg" alt="navigation icon" class="nav-hamburger"
                        width=35" height="35" target="_blank" /> <img src="https://vfitclub.netlify.app/image/facebook.svg"
                        alt="navigation icon" class="nav-hamburger" width=35" height="35" /> <img
                        src="https://vfitclub.netlify.app/image/instagram.svg" alt="navigation icon" class="nav-hamburger"
                        width=35" height="35" /> <img src="https://vfitclub.netlify.app/image/twitter.svg"
                        alt="navigation icon" class="nav-hamburger" width=35" height="35" />
                </div>
            </div>
            <nav class="footer-nav" aria-label="navigation">
                <h3>Estekak azkarrak</h3>
                <ul>
                    <li>
                        <a href="#aboutus">Guri Buruz</a>
                    </li>
                    <li>
                        <a href="#memberships">Bazkidea</a>
                    </li>
                    <li>
                        <a href="#ourteam">Gure Taldea</a>
                    </li>
                    <li>
                        <a href="#contact">Kontaktuak </a>
                    </li>
                    <li>
                        <a href="#reviews">Berriak</a>
                    </li>
                </ul>
            </nav>
            <div class="newsletter">
                <h3>Berriak</h3>
                <input type="email" placeholder="email@domain.com" /><button>&#10003;</button>
            </div>
        </div>
        <hr />
        <div class="container copyrights">
            <div>Copyright © by KOBAZ</div>
        </div>
    </footer>
</body>
</html>

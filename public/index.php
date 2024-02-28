<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arte Martzialak</title>
    <link rel="shortcut icon" href="img/karate.png" />
    <link rel="stylesheet" href="css.css">
    
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
                <img src="img/menu-hamburguesa.png" alt="navegazio icon" class="nav-hamburger" width="30" height="30"/>
                <ul class="menua">
                    <li> <!-- icono casa como pestaña principal -->
                        <a href="index.html"><img src="img/casa.png" alt="home" width="30" height="30"></a>
                    </li>
                    <li>
                        <a href="#guburuz">About Us</a>
                    </li>
                    <li>
                        <a href="#kontaktua">Kontaktua/Kokapena</a>
                    </li>
                    <li>
                        <a href="registro.php">Erregistroa</a>
                    </li>
                    <li>
                        <a href="saioahasi.php"><img src="img/person.svg"></a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <!-- Main Sekzioa -->
        <section class="sekzioa1" id="sekzioa1">
            <div class="container marcial-box">
                <div class="marcial-irudia-content">
                    <h1 class="encabezado"> Tolosako arte martzial kirol taldea</h1>
                    <p class="deskripzioa">Bidezko indarra, bidezko bidea. Klase pertsonalak eta arte martzial ezberdinak, gym propio batekin</p>
                    <div class="marcial-box-botoiak"><button>Kategoriak...</button><button><a href="#Lehiaketak">Kurtsoak</a></button></div>
                </div>
            </div>
        </section>
        <section class="section-guburuz" id="guburuz">
            <div class="container guburuz">
                <div class="section-guburuz-info" data-aos="fade-down">
                    <h2>Tolosako Arte Martzial buruz</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                        Quidem, sint nisi rerum iure voluptatem error, 
                        impedit iusto at quia ducimus doloribus voluptatibus autem dolores dolor cum,
                        sed commodi quibusdam deleniti.
                    </p>
                    <h2>Gure visioa</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Dolor architecto odio tempora eveniet nobis. 
                        Totam delectus reprehenderit odit repellat fugiat 
                        error ipsam maiores accusantium dicta vitae consequuntur, optio culpa! Neque!
                    </p>
                </div>
                <div class="section-guburuz-irudiak">
                    <figure class="guburuz-box_irudiak">
                        <img src="img/Kendo.jpg" alt="navigation icon" class="nav-hamburger" width="320" height="190" style="--i: 0" data-aos="fade-down-right"/>
                        <img src="img/marcial.jpg" alt="navigation icon" class="nav-hamburger"width="320" height="190" style="--i: 0" data-aos="fade-down-right"/>
                        <img src="img/aikido.jpg" alt="navigation icon" class="nav-hamburger"width="320" height="190" style="--i: 0" data-aos="fade-down-right"/>
                    </figure>
                </div>
            </div>
        </section>
        <section class="section-lehiaketak" id="Lehiaketak">
            <div class="container lehiaketak">
        <!-- Kurtoak Section-->
              <h2 class="tituloa">Kurtsoak</h2>
              <div class="klaseak">
                <div class="klasea" data-aos="flip-left">
                  <h2 class="klasea-izena">KENDO/AIKIDO</h2>
                  <div class="klasea-prezioa">Inskripzioa 50€</div>
                  <div class="klasea-prezioa">Klase erdiak: 25€</div>
                  <hr />
                  <div class="class-izena">
                    <ul>
                      <li>Data:</li>
                      <li>Ordua:</li>
                    </ul>
                  </div>
                  <a>Matrikulatu</a>
                </div>
                <div class="klasea" data-aos="flip-up">
                  <h2 class="klasea-izena">JIU-JITSU</h2>
                  <div class="klasea-prezioa">Inskripzioa 50€</div>
                  <div class="klasea-prezioa">Klase erdiak: 25€</div>
                  <hr />
                  <div class="klasea-izena">
                    <ul>
                      <li>Data:</li>
                      <li>Ordua:</li>
                    </ul>
                  </div>
                  <a>Matrikulatu</a>
                </div>
                <div class="klasea" data-aos="flip-right">
                  <h2 class="klasea-izena">JUDO</h2>
                  <div class="klasea-prezioa">Inskripzioa 50€</div>
                  <div class="klasea-prezioa">Klase erdiak: 25€</div>
                  <hr />
                  <div class="klasea-izena">
                    <ul>
                      <li>Data: </li>
                      <li>Ordua:</li>
                    </ul>
                  </div>
                  <a>Matrikulatu</a>
                </div>
              </div>
            </div>
          </section>
          <section class="section-kontaktua" id="kontaktua">
            <div class="container kontaktua">
              <div class="kontaktuak">
                <form action="./PHP/index.php" method="post">
                  <h2 class="tituloa">Erregistratu hemen!!</h2>
                  <div class="klasea-input"><input type="text" placeholder="Izena & Abizena" /></div>
                  <div class="klasea-input"><input type="email" placeholder="Email" /></div>
                  <div class="klasea-input"><input type="number" placeholder="Zenbakia"/></div>
                  <div class="klasea-input"><input type="password" placeholder="Pasahitza" /></div>
                  <div class="klasea-input"><input type="number" id="jaioeguna" name="jaioeguna" min="1" max="31" required placeholder="Jaio-Eguna"></div>
                  <div class="klasea-input">
                    <select id="hilabetea" name="hilabetea" required>
                        <option value="">*Jaio-Hilabetea*</option>
                        <option value="1">Urtarrila</option>
                        <option value="2">Otsaila</option>
                        <option value="3">Martxoa</option>
                        <option value="4">Apirila</option>
                        <option value="5">Maiatza</option>
                        <option value="6">Ekaina</option>
                        <option value="7">Uztaila</option>
                        <option value="8">Abuztua</option>
                        <option value="9">Iraila</option>
                        <option value="10">Urria</option>
                        <option value="11">Azaroa</option>
                        <option value="12">Abendua</option>
                    </select>
                  </div>
                  <div class="klasea-input"><input type="number" id="urtea" name="urtea" min="1900" max="2100" required placeholder="Jaio-Urtea">
                  </div>
                  <button>Bidali</button>
                </form>
              </div>
              <div class="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11284.244287121758!2d-1.4404!3d43.1316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51a9d8133ba2f1%3A0x34df88f0b1c682f1!2sTolosa%2C%20Gipuzkoa!5e0!3m2!1sen!2ses!4v1699191706300!5m2!1sen!2ses" allowfullscreen="" loading="lazy" style="border: 0" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </section>
    </main>
    <footer class="section-footer" id="footer">
        <div class="footer-box container">
          <div class="contact-details">
            <h2>Tolosako Arte Martzial eskola</h2>
            <div class="contact-company-address">
              Santa Luzia 17,<br />
              20400 Tolosa, Gipuzkoa<br />España
            </div>
            <div class="contact-social-links">
              <img src="https://vfitclub.netlify.app/image/whatsapp.svg" alt="navigation icon" class="nav-hamburger" width=35" height="35" target="_blank" /> <img src="https://vfitclub.netlify.app/image/facebook.svg" alt="navigation icon" class="nav-hamburger" width=35" height="35" /> <img src="https://vfitclub.netlify.app/image/instagram.svg" alt="navigation icon" class="nav-hamburger" width=35" height="35" /> <img src="https://vfitclub.netlify.app/image/twitter.svg" alt="navigation icon" class="nav-hamburger" width=35" height="35" />
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
      <script src="index.js"></script>
</body>
</html>
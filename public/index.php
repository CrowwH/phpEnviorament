<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon"" href="img/logo erronka3.png" />
    <title>pakAG Saioa Hasi</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url('./img/pakAG_fondo_login.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .container {
            text-align: center;
            background-color: rgba(0, 0, 0, 0);
            padding: 20px;
            border-radius: 10px;
            color:white;
            background-image: linear-gradient(to bottom, red, blue);
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ongi Etorria</h1>
        <p>Egin klik botoian saioaren hasierako orrira joateko.</p>
        <button onclick="location.href='login.php'">Joan Loginera</button>
    </div>
</body>
</html>

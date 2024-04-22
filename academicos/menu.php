<?php

include("./inc/sesiones.php");
validarSesion();
include("./inc/header.php")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Escolar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        p {
            color: #555;
            margin-bottom: 20px;
        }

        a {
            display: block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 10px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #45a049;
        }

        .logout-btn {
            padding: 10px 20px;
            background-color: #f44336;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .logout-btn:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>BIENVENIDO</h1>
    <p><?= isset($_SESSION["Nombre"]) ? $_SESSION["Nombre"] : "Nombre no disponible"; ?></p>

    <?php
    // Verifica si la función menu() está definida y la llama si está disponible
    if (function_exists('menu')) {
        echo menu();
    } else {
        echo "Menú no disponible";
    }
    ?>

    <a href="logout.php" class="logout-btn">Salir</a>
</div>

</body>
</html>
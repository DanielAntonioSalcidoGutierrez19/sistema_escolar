
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
</head>
<body>

<h1>BIENVENIDO </h1> <?= $_SESSION["Nombre"]; ?> <br>

    <?= menu()?>


    <a href="logout.php">Salir</a>
    
</body>
</html>
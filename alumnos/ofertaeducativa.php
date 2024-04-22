<?php

include_once("./inc/sesiones.php");
validarSesion();
include_once("./inc/header.php");
include_once("./inc/consultas.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Oferta Educativa</title>
   <style>
      body {
         font-family: Arial, sans-serif;
         background-color: #f9f9f9;
         margin: 0;
         padding: 0;
      }

      .container {
         max-width: 600px;
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

      .menu {
         display: flex;
         justify-content: center;
         margin-top: 20px;
      }

      .menu a {
         padding: 10px 20px;
         background-color: #4CAF50;
         color: #fff;
         text-decoration: none;
         border-radius: 5px;
         transition: background-color 0.3s;
         margin: 0 10px;
      }

      .menu a:hover {
         background-color: #45a049;
      }
   </style>
</head>

<body>

   <div class="container">
      <h1>OFERTA EDUCATIVA</h1>

      <?php
      $resultado = mostrarCarreras();
      while ($row = mysqli_fetch_assoc($resultado)) {
         echo $row["nombre"] . "<br>";
      }
      ?>

      <div class="menu">
         <a href="inscripcion.php">Regresar</a>
      </div>
   </div>

</body>

</html>
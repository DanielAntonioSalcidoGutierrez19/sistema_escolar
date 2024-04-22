<?php

include ("./inc/sesiones.php");

validarSesion();

include ("./inc/header.php"); 

include_once("./inc/consultas.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table {
  border-collapse: collapse; /* Combina los bordes de las celdas */
}

th, td {
  border: 1px solid black; /* Establece el estilo del borde */
  padding: 8px; /* Agrega relleno al contenido de las celdas */
}
</style>
</head>
<body>
    <h1>Bienvenido</h1> <?= $_SESSION["Nombre"]; ?>
    <?= menu()?>

    <br>
    <hr>

  <h1>Materias Capturadas</h1>

  <table border="1">
    <tr>
        <td>Clave</td>
        <td>Clave Carrera</td>
        <td>Materia</td>
        <td>Tipo</td>
        <td>Créditos</td>
        <td>Horas Teoría</td>
        <td>Horas Lab</td>
        <td>Créditos Requeridos</td>
        <td>Materias Requeridas</td>
    </tr>
   
    <?php
    $resultado = mostrarMaterias();

    while ($row = mysqli_fetch_assoc($resultado)) {

    echo "<tr>
           <td>$row[clave]</td>
           <td>$row[clave_carrera]</td> 
           <td>$row[materia]</td>
           <td>$row[tipo]</td>
           <td>$row[creditos]</td>
           <td>$row[horas_teoria]</td>
           <td>$row[horas_lab]</td>
           <td>$row[creditos_req]</td>
           <td>$row[materias_req]</td>
            <tr>";
 
    }
    ?>
    </table>


<h1>Captura de Materia</h1>

  Carrera:

<form action="./capturarmateriainsert.php" method="post">
    <select name="carreras">';

        <?php

        $resultado = mostrarCarreras();


        while ($row = mysqli_fetch_assoc($resultado)) {

            echo "<option value = '$row[IDCarrera]' > $row[nombre] </option> \n";
        }
        ?>
    </select>
    <br>Nombre:
    <br>
    <input type="text" name="Nombre" value = "Nombre"><br>Tipo:
    <select name="tipo">
        <option value="OPT">OPT</option>
        <option value="OBL">OBL</option>
    </select>
    <br>Creditos:
    <select name="creditos">
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="20">20</option>
    </select>
    <br>Horas de teoria:
    <select name="horas_de_teoria">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    <br>Horas de lab:
    <select name="horas_de_lab">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="10">4</option>
    </select>
    <br>Eje:
    <select name="eje">
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="E">E</option>
        <option value="I">I</option>
        <option value="P">P</option>
    </select>
    <br>Creditos requeridos:
    <select name="creditos_requeridos">
        <option value="0">0</option>
        <option value="120">120</option>
        <option value="140">140</option>
        <option value="150">150</option>
        <option value="250">250</option>
        <option value="275">275</option>
    </select>
    <br>Materias requeridas:
    <input name="materias_requeridas" type="number" value="">
    <br>
    <input type="submit" value="Capturar Materias">

</form>
    <a href="logout.php">Log out</a>
</body>
</html>
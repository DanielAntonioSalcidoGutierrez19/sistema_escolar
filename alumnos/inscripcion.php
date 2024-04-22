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
    <title>Inscripcion</title>
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

        h2 {
            color: #555;
            margin-bottom: 20px;
        }

        form {
            margin-top: 20px;
        }

        select {
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Inscripcion</h1>
        <h2><?php echo $_SESSION["Expediente"] . " " . $_SESSION["Nombre"]; ?></h2>

        <?php menu(); ?>

        <br>

        <?php
        $consulta = "SELECT IDAlumno FROM carreras_alumnos WHERE IDAlumno = $_SESSION[Expediente];";
        $resultado = buscarAlumno($consulta);
        $row = mysqli_fetch_assoc($resultado);

        if (empty($row["IDAlumno"])) {
        ?>
            <form action="./inscribir.php" method="post">
                <label for="carrera">Carrera:</label>
                <select name="carrera">
                    <?php
                    $resultado = mostrarCarreras();
                    while ($row = mysqli_fetch_assoc($resultado)) {
                        echo "<option value='$row[IDCarrera]'>$row[nombre]</option>";
                    }
                    ?>
                </select>
                <br>
                <input type="submit" value="Inscribirme">
            </form>
        <?php
        } else {
            echo "Ya estás inscrito en una carrera";
        }
        ?>
    </div>

</body>

</html>

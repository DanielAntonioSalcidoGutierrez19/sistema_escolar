<?php


    if (empty($_POST)){
        header("Location:index.php?error=200");
    }
    
    include("./inc/config.php");

    include("./inc/consultas.php");
    
    $expediente = $_POST["user"];

    $contrasenia = $_POST["pswd"];

    if(!empty($expediente) || !empty($contrasenia)){

    $query = "SELECT apellido1, apellido2, nombre, expediente FROM academicos WHERE expediente = $expediente AND contraseña = "  . "MD5(" . "'" . $contrasenia . "'" . ");";

    conectar();

    $resultado = mysqli_query(conectar(), $query) or die("No me conecté");

    $fila = mysqli_fetch_assoc($resultado);

    if ($resultado -> num_rows == 1) {

        session_start();

        $_SESSION["validada"] = 1;

        $_SESSION["Nombre"] = $fila ["nombre"] ." ". $fila ["apellido1"] . " " . $fila ["apellido2"];

        $_SESSION["Expediente"] = $fila["expediente"];

        header("Location:menu.php");

    }else{

        header("Location: index.php?error=100");

    }


    mysqli_close($connection);

    }else{
        header("Location:index.php?error=200");
    }

?>


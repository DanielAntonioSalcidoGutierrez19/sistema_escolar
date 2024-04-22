<?php
session_start(); // Iniciar la sesión aquí

if (empty($_POST["user"]) || empty($_POST["pswd"])) { // Corregir la condición de verificación de campos vacíos
    header("Location:index.php?error=200");
    exit;
}

include("./inc/config.php");
include("./inc/consultas.php");

$expediente = $_POST["user"];
$contrasenia = $_POST["pswd"];

// Evitar la inyección SQL utilizando consultas preparadas
$query = "SELECT nombre, apellido1, apellido2, expediente FROM alumno WHERE expediente = ? AND contraseña = MD5(?)";
$con = conectar();
$stmt = mysqli_prepare($con, $query);
mysqli_stmt_bind_param($stmt, "is", $expediente, $contrasenia);
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);

if (mysqli_stmt_num_rows($stmt) == 1) {
    mysqli_stmt_bind_result($stmt, $nombre, $apellido1, $apellido2, $expediente);
    mysqli_stmt_fetch($stmt);

    $_SESSION["validada"] = true;
    $_SESSION["Nombre"] = $nombre . " " . $apellido1 . " " . $apellido2;
    $_SESSION["Expediente"] = $expediente;

    header("Location:menu.php");
} else {
    header("Location:index.php?error=100");
}

mysqli_stmt_close($stmt);
mysqli_close($con);
?>
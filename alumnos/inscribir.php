<?php

include("./inc/consultas.php");

session_start();

print_r($_POST);

print_r($_SESSION);

$consulta = "INSERT INTO carreras_alumnos (IDAlumno, IDCarrera) VALUES ($_SESSION[Expediente], $_POST[carrera])";

inscribirAlumno($consulta);

header("Location: menu.php");

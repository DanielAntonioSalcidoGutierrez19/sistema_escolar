<?php
include ("./inc/consultas.php");

$SQL = "INSERT INTO materias (clave_carrera,materia,tipo,creditos,horas_teoria,horas_lab,eje,creditos_req,materias_req) " ;
$SQL.=" VALUES ( $_POST[carreras],'$_POST[Nombre]', '$_POST[tipo]', '$_POST[creditos]','$_POST[horas_de_teoria]','$_POST[horas_de_lab]', '$_POST[eje]', '$_POST[creditos_requeridos]','$_POST[materias_requeridas]' );";
inscribirAlumno($SQL);

header("Location: capturarmateria.php");

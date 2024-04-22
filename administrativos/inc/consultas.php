<?php


    function conectar(){
        include("config.php");   
    
        $connection = mysqli_connect($HOST, $USER, $PASSWORD, $NAMEBD) or die("No me conecté");

        return $connection;
    }

    function mostrarCarreras(){

        $query = "SELECT nombre, IDCarrera FROM carreras ORDER BY nombre";

        $resultado = mysqli_query(conectar(), $query) or die("No me conecté");

        return $resultado;
    

    }

    function mostrarMaterias(){

        $query = "SELECT clave,clave_carrera,materia,tipo,creditos,horas_teoria,horas_lab,eje,creditos_req,materias_req FROM materias ORDER BY materia";

        $resultado = mysqli_query(conectar(), $query) or die("No me conecté");

        return $resultado;
    

    }

    function inscribirAlumno($query){

      include("config.php");

      $resultado = mysqli_query(conectar(), $query) or die("No me conecté, o el alumno ya está inscrito en el sistema.");
      
        return $resultado;

    }



    function buscarAlumno($query){

        include("config.php");

        $resultado = mysqli_query(conectar(), $query) or die("No me conecté, o el alumno ya está inscrito en el sistema.");
  
          return $resultado;

    }

    

    





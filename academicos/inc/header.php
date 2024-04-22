<?php

    function encabezado(){


        echo "
        
        <h1>Bienvenido</h1>
        <h2>$_SESSION[Nombre]</h2>";


    }


    function menu() {   

        echo 
        
        "
        <table>
        <tr>
        <th><a href= 'ofertaeducativa.php'>Oferta Educativa</a></th>

        <th><a href = 'inscripcion.php'> Inscribirme </a></th>

        <th>Materias</th>

        <th>Cursos</th>
    
        <th>Kardex</th>
    
        <th>Calificaciones</th>
    
        <th>Idiomas</th>
    
        <th>Adeudos</th>
        
        </tr>
        </table>";

    }   


?>
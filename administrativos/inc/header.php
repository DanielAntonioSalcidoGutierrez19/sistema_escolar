<?php

    function encabezado(){
        echo "<h1>Bienvenido</h1>
            <h2>$_SESSION[Nombre]</h2>";
    }

    function menu(){
        echo "
        <table>
        <tr>
        <th><a href = capturarmateria.php>Capturar Materia</a></th>
        </tr>
        </table>";
    }





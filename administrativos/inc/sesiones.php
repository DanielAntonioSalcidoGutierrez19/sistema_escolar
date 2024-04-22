<?php

    function validarSesion(){

        session_start();


        if(empty($_SESSION["validada"])){
            header("Location:index.php?error=300");
        }
        
        if($_SESSION["validada"] != 1 ){
            header("Location:index.php?error=300");
        }

    }


?>
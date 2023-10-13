<?php

    $dato1= $_POST["txtnombre"]; // usamos un arreglo para almacenar  

    if ($dato1=="Montse"){
        header('Location:  ../Menu.php');

    }else {
        header('Location: ../loginError.php');
    }

        
?>
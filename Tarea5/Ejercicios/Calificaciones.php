<?php
    $nDato1c=$_GET["caNum1"];
    
    
        if ($nDato1c==0 || $nDato1c==1||$nDato1c==2 || $nDato1c==3 ){
            echo "Tiene que repetir la Clase";
            echo"<a href='index.php'>Inicio</a>";
            
        }else if ($nDato1c==4 || $nDato1c==5 ){
            echo "Tienes que intentarlo un poco más";
            echo"<a href='index.php'>Inicio</a>";
            
        }else if ($nDato1c==5 || $nDato1c==6){
            echo "Una calificación bastante baja";
            echo"<a href='index.php'>Inicio</a>";
            
        }else if ($nDato1c==7 || $nDato1c ==8){
            echo "Muy bien, intenta mejorar!";
            echo"<a href='index.php'>Inicio</a>";
            
        }else if ($nDato1c==9 || $nDato1c==10){
            echo "Una excelente calificación!! aigue así";
            echo"<a href='index.php'>Inicio</a>";
            
        }else {
            echo "Invalido";
            echo"<a href='index.php'>Inicio</a>";
            
        }


     


?>
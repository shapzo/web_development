<?php 
    $conexion=@mysqli_connect("localhost","root","","carros_xxx");

    if(!$conexion){
        die("Disculpe la molestia, no se puede conectar al servidor");
    }else {
        echo "coneccion existosa, asi como tu my love";
    }
    
?>
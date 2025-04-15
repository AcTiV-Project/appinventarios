<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $pass = '';
    $db = 'appinventarios';

    $conexion = new mysqli($servidor, $usuario, $pass, $db);

    if($conexion->connect_error){
        die("Error de conexion a la base de datos...". $conexion->connect_error);
    }
    else{
        //echo "Exito!";
    }

?>
<?php
    include('conexion_db.php');
    
    $nombre = $_POST['nombre'];
    $pass = $_POST['pass'];

    $sql = "INSERT INTO usuarios VALUES('', '$nombre', '$pass')";
    $query = mysqli_query($conexion, $sql);

    if(isset($query)){
        echo "Usuario registrado con exito...";
    }



?>
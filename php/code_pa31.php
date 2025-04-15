<?php
    include('conexion_db.php');

    $nombre = $_POST['nombre'];
    $creador = $_POST['creador'];
    $precio = $_POST['precio'];
    $codigo = $_POST['codigo'];
    $descripcion = $_POST['descripcion'];

    $sql = "INSERT INTO productos VALUES ('', '$nombre', '$creador', '$precio', '$codigo', '$descripcion')";
    $query = mysqli_query($conexion, $sql);
    if(!$query){
        die("Error de consulta: ". mysqli_error($query));
    }
    else{
        echo "Producto Registrado...";
    }

?>
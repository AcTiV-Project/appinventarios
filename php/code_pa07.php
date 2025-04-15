<?php
    include ('conexion_db.php');

    $almacen = $_POST['almacen'];
    $ubicacion = $_POST['ubicacion'];

    $sql = "INSERT INTO almacenes VALUES('', '$almacen', '$ubicacion')";
    $query = mysqli_query($conexion, $sql);

    if(!$query){
        die("Error de consulta: ". mysqli_error($conexion));
    }
    else{
        echo "Almacen registrado...";
    }
?>
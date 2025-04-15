<?php
    include('conexion_db.php');

    $codigo = mysqli_real_escape_string($conexion, $_POST['codigo']);
    $almacen = mysqli_real_escape_string($conexion, $_POST['almacen']);

    if($_POST['codigo'] == ''){
        echo "Ingresa el codigo de material";
    }
    elseif($_POST['almacen'] == ''){
        echo "Ingresa el almacen";
    }

    $sql = "SELECT  almacenes.id     AS almacen_id,
                    almacenes.nombre AS almacen_nombre,
                    productos.nombre AS producto_nombre,
                    productos.codigo AS producto_codigo,
                    productos.precio AS producto_precio,
                    productos.descripcion AS producto_descripcion,
                    inventario.cantidad
                    
                FROM inventario

                INNER JOIN
                    productos ON inventario.producto_id = productos.id
                INNER JOIN
                    almacenes ON inventario.almacen_id = almacenes.id

                WHERE productos.codigo = '$codigo' AND almacenes.nombre = '$almacen'";

        $query = mysqli_query($conexion, $sql);
?>
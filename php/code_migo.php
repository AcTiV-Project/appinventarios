<?php
    include('conexion_db.php');

    if (isset($_POST['btn-migo'])) {
        $codigo = $_POST['codigo'];
        $almacen_origen = $_POST['almacen_origen'];
        $almacen_destino = $_POST['almacen_destino'];
        $cantidad = (int)$_POST['cantidad'];

        if ($almacen_origen == $almacen_destino) {
            echo "El almacén de origen y el de destino no pueden ser el mismo.";
            exit();
        }

        // Verificar inventario disponible en el almacén de origen
        $sql_origen = "SELECT productos.id AS producto_id, inventario.cantidad, inventario.almacen_id
                       FROM productos 
                       INNER JOIN inventario ON productos.id = inventario.producto_id
                       INNER JOIN almacenes ON almacenes.id = inventario.almacen_id
                       WHERE productos.codigo = '$codigo' AND almacenes.nombre = '$almacen_origen'";
        
        $result_origen = mysqli_query($conexion, $sql_origen);

        if (mysqli_num_rows($result_origen) == 0) {
            die("No se encontró el producto en el almacén de origen o no hay inventario.");
        }

        $row_origen = mysqli_fetch_assoc($result_origen);
        $cantidad_disponible = (int)$row_origen['cantidad'];
        $producto_id = $row_origen['producto_id'];

        if ($cantidad_disponible < $cantidad) {
            die("No hay suficiente inventario en el almacén de origen. Cantidad disponible: $cantidad_disponible.");
        }

        // 1. Restar inventario del almacén de origen
        $sql_restar = "UPDATE inventario 
                       SET cantidad = cantidad - $cantidad 
                       WHERE producto_id = '$producto_id' 
                         AND almacen_id = (SELECT id FROM almacenes WHERE nombre = '$almacen_origen')";
        mysqli_query($conexion, $sql_restar);

        // 2. Sumar inventario al almacén de destino
        $sql_destino = "SELECT * FROM inventario 
                        WHERE producto_id = '$producto_id' 
                          AND almacen_id = (SELECT id FROM almacenes WHERE nombre = '$almacen_destino')";
        $result_destino = mysqli_query($conexion, $sql_destino);

        if (mysqli_num_rows($result_destino) > 0) {
            // Ya existe el registro, actualizamos cantidad
            $sql_sumar = "UPDATE inventario 
                          SET cantidad = cantidad + $cantidad 
                          WHERE producto_id = '$producto_id' 
                            AND almacen_id = (SELECT id FROM almacenes WHERE nombre = '$almacen_destino')";
            mysqli_query($conexion, $sql_sumar);
        } else {
            // No existe el registro, insertamos uno nuevo
            $sql_insertar = "INSERT INTO inventario (producto_id, cantidad, almacen_id)
                             VALUES ('$producto_id', '$cantidad', 
                             (SELECT id FROM almacenes WHERE nombre = '$almacen_destino'))";
            mysqli_query($conexion, $sql_insertar);
        }

        echo "✅ Movimiento de inventario realizado con éxito.";
    }
?>

<?php
    include('conexion_db.php');
    session_start();

    $nombre = $_POST['nombre'];
    $pass = $_POST['pass'];

    // Usar sentencia preparada
    $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE nombre = ? AND clave = ?");
    $stmt->bind_param("ss", $nombre, $pass);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $nombre;
        header("Location: ../view/home.php");
        exit();
    } else {
        echo "Error de credenciales";
    }

    $stmt->close();
?>

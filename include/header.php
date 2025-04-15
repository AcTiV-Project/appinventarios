<!DOCTYPE html>
<html lang="en">
<head>
      <!--CSS-->
      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/responsive.css">

      <!--JS-->


      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>HOME</title>
</head>
<body>
      <div class="grid">
            <header class="header">
                  <img src="../image/logo.png" alt="imagen" class="icono-logo">

                  <h3>
                        <?php
                              session_start();

                              

                              echo $_SESSION['username']; 
                        ?>
                  </h3>

                  <a href="../php/salir.php">Cerrar Sesion</a>
            </header>
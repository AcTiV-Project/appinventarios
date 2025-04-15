<!DOCTYPE html>
<html lang="en">
<head>
      <!--CSS-->
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/responsive.css">

      <!--JS-->

      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>System</title>
</head>
<body>
      <div class="login">
            <div class="div-logo">
                  <img src="image/logo.png" alt="IMAGEN PORTADA" class="logo">
            </div>

            <div class="div-form">
                  <form class="form-login" action="php/login.php" method="post">
                        <label for="">USUARIO</label>
                        <input class="box-input" type="text" name="nombre" placeholder="Nombre Usuario">

                        <label for="">Contraseña</label>
                        <input class="box-input" type="password" name="pass" placeholder="Contraseña" id="">

                        <input type="submit" class="btn-entrar" value="ENTRAR">
                  </form>
            </div>
      </div>
</body>
</html>
<?php require_once '../include/header.php' ?>

      <section class="section">
            <div class="transaccion">
                  <a href="home.php">Menu Principal</a>

                  <h1 class="titulo">Crear Nuevo Usuario</h1>

                  <form action="../php/code_zres.php" method="post">
                        <label for="">Nombre</label>
                        <input type="text" name="nombre" id="" placeholder="NOMBRE DE USUARIO">

                        <label for="">Contraseña</label>
                        <input type="password" name="pass" id=""  placeholder="Contraseña">

                        <input class="btn-input" name="" type="submit" value="EJECUTAR">
                  </form>
            </div>
      </section>

<?php require_once '../include/footer.php' ?>
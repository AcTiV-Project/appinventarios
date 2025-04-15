<?php require_once '../include/header.php' ?>

      <section class="section">
            <div class="transaccion">
                  <a href="home.php">Menu Principal</a>

                  <h1 class="titulo">Crear Almacen</h1>

                  <form action="../php/code_pa07.php" method="post">
                        <label for="">Almacen</label>
                        <input type="text" name="almacen" id="" placeholder="ALMACEN">

                        <label for="">Ubicacion</label>
                        <input type="text" name="ubicacion" id="" placeholder="UBICACION">

                        <input class="btn-input" type="submit" value="EJECUTAR">
                  </form>
            </div>
      </section>

<?php require_once '../include/footer.php' ?>
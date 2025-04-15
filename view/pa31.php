<?php require_once '../include/header.php' ?>

      <section class="section">
            <div class="transaccion">
                  <a href="home.php">Menu Principal</a>

                  <h1 class="titulo">Registrar Productos</h1>

                  <form action="../php/code_pa31.php" method="post">
                        <label for="">Nombre</label>
                        <input type="text" name="nombre" id="" placeholder="NOMBRE">

                        <label for="">Creador</label>
                        <input type="text" name="creador" placeholder="CREADOR">

                        <label for="">Precio</label>
                        <input type="text" name="precio" placeholder="PRECIO" id="">

                        <label for="">Codigo</label>
                        <input type="number" name="codigo" id="" placeholder="CODIGO">

                        <label for="">Descripcion</label>
                        <input type="text" name="descripcion" id="" placeholder="DESCRIPCION">

                        <input class="btn-input" type="submit" value="EJECUTAR">
                  </form>
            </div>
      </section>

<?php require_once '../include/footer.php' ?>
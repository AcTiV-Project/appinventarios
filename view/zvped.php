<?php require_once '../include/header.php' ?>

      <section class="section">
            <div class="transaccion">
                  <a href="home.php">Menu Principal</a>

                  <h1 class="titulo">Entrada de Productos</h1>

                  <form action="../php/code_zvped.php" method="post">
                        <label for="">Codigo</label>
                        <input type="number" name="codigo" id="" placeholder="CODIGO">

                        <label for="">Almacen</label>
                        <input type="text" name="almacen" placeholder="ALMACEN">

                        <label for="">Cantidad</label>
                        <input type="number" name="cantidad" placeholder="CANTIDAD" id="">

                        <input class="btn-input" name="btn-zvped" type="submit" value="EJECUTAR">
                  </form>
            </div>
            
      </section>

<?php require_once '../include/footer.php' ?>
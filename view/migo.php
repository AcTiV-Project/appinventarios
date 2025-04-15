<?php require_once '../include/header.php' ?>

      <section class="section">
            <div class="transaccion">
                  <a href="home.php">Menu Principal</a>

                  <h1 class="titulo">Movimiento de Productos</h1>

                  <form action="../php/code_migo.php" method="post">
                        <label for="">Codigo</label>
                        <input type="number" name="codigo" id="" placeholder="CODIGO">

                        <label for="">Almacen Origen</label>
                        <input type="text" name="almacen_origen" placeholder="ALMACEN ORIGEN">

                        <label for="">Almacen Destino</label>
                        <input type="text" name="almacen_destino" placeholder="ALMACEN DESTINO" id="">

                        <label for="">Cantidad</label>
                        <input type="number" name="cantidad" placeholder="CANTIDAD" id="">

                        <input class="btn-input" name="btn-migo" type="submit" value="EJECUTAR">
                  </form>
            </div> 
      </section>

<?php require_once '../include/footer.php' ?>
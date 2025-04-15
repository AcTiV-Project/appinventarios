<?php require_once '../include/header.php' ?>

      <section class="section">
            <div class="present content ">
                  <div class="fecha">
                        <h1>
                              <?php
                                    date_default_timezone_set('America/Panama'); // Establece zona horaria

                                    $hoy = new DateTime(); // Fecha de hoy
                                    $formatter = new IntlDateFormatter(
                                          'es_ES', // Idioma español
                                          IntlDateFormatter::FULL,
                                          IntlDateFormatter::NONE,
                                          'America/Panama',
                                          IntlDateFormatter::GREGORIAN,
                                          "EEEE d 'de' MMMM 'de' yyyy"
                                    );

                                    echo ucfirst($formatter->format($hoy)); // Convierto la primera letra en mayúscula
                              ?>
                        </h1>
                  </div>

                  <div>
                        <h1>
                              <?php
                                    date_default_timezone_set('America/Panama');
                                    echo date("h:i A"); // Formato 12h (HH:MM AM/PM)
                              ?>
                        </h1>
                  </div>
            </div>


            <div class="tools div-content">
                  <div class="transactions">
                        <h1>ZVPED</h1>
                        <img class="ico" src="../image/zvped.png" alt="IMAGEN">
                        <p>Entrada de Productos</p>
                        <a href="zvped.php">Execute</a>
                  </div>

                  <div class="transactions">
                        <h1>MIGO</h1>
                        <img class="ico" src="../image/migo.png" alt="IMAGEN">
                        <p>Movimientos de Productos</p>
                        <a href="migo.php">Execute</a>
                  </div>

                  <div class="transactions">
                        <h1>RS21</h1>
                        <img class="ico" src="../image/rs21.png" alt="IMAGEN">
                        <p>Resumen de Stock</p>
                        <a href="rs21.php">Execute</a>
                  </div>

                  <div class="transactions">
                        <h1>MB1E</h1>
                        <img class="ico" src="../image/mb1e.png" alt="IMAGEN">
                        <p>Eliminar Productos</p>
                        <a href="mb1e.php">Execute</a>
                  </div>
                  
                  <div class="transactions">
                        <h1>PA31</h1>
                        <img class="ico" src="../image/pa31.png" alt="IMAGEN">
                        <p>Registrar Productos</p>
                        <a href="pa31.php">Execute</a>
                  </div>

                  <div class="transactions">
                        <h1>NP01</h1>
                        <img class="ico" src="../image/np01.png" alt="IMAGEN">
                        <p>Contabilidad de Productos</p>
                        <a href="np01.php">Execute</a>
                  </div>

                  <div class="transactions">
                        <h1>ZVREV</h1>
                        <img class="ico" src="../image/zvrev.png" alt="IMAGEN">
                        <p>Modificar Productos</p>
                        <a href="zvrev.php">Execute</a>
                  </div>

                  <div class="transactions">
                        <h1>PA07</h1>
                        <img class="ico" src="../image/pa07.png" alt="">
                        <p>Crear Almacen</p>
                        <a href="pa07.php">Execute</a>
                  </div>

                  <div class="transactions">
                        <h1>ZVRES</h1>
                        <img class="ico" src="../image/users.png" alt="">
                        <p>Crear Usuario</p>
                        <a href="zvres.php">Execute</a>
                  </div>
            </div>


      </section>

<?php require_once '../include/footer.php' ?>
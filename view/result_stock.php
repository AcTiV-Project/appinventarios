<?php require_once '../include/header.php' ?>

    <section class="section">
        <?php
            include('../php/code_zvped.php');
            include('../php/conexion_db.php');

            if(mysqli_num_rows($query) > 0):
                while($row = mysqli_fetch_assoc($query)):
        ?>

        <a href="home.php">Menu Principal</a>

        <main class="info_producto">
            <div class="cajas c1">
                <h1>Nombre: </h1>
 
                <p><?=$row['producto_nombre']?></p>
            </div>
            <div class="cajas c2">
                <h1>Codigo: </h1>

                <p><?=$row['producto_codigo']?></p>
            </div>
            <div class="cajas c3">
                <h1>Fabricante: </h1>

                <p><?=$row['producto_creador']?></p>
            </div>
            <div class="cajas c4">
                <h1>Precio: </h1>

                <p><?=$row['producto_precio']?></p>
            </div>
            <div class="cajas c5">
                <h1>Descripcion: </h1>

                <p><?=$row['producto_descripcion']?></p>
            </div>
        </main>

        <main class="div_tabla">
            <div class="mitabla"> 
                <table>
                    <tr>
                        <th>Almacen</th>
                        <th>Cantidad</th>
                        <th>Descripcion</th>
                    </tr>

                    <tr>
                        <td><?=$row['almacen_nombre']?></td>
                        <td><?=$row['cantidad']?></td>
                        <td><?=$row['producto_descripcion']?></td>
                    </tr>

                </table>
            </div>
        <?php
                endwhile;
            else:

            header("location: ../view/Mistake.php");
        ?>

        <?php
            endif;
        ?>
        </main>
    </section>

<?php require_once '../include/footer.php' ?>
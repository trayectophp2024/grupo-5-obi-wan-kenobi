<?php

    require_once "utils/funciones.php";
    require_once "utils/db_connection.php";


    $tabla=$_GET['categorias'] ?? FALSE;
    $id=$_GET['id'] ?? FALSE;

    $productos=categoria_particular($conn, $tabla, $id);

/*     echo "<pre>";
    var_dump($productos);
    echo "</pre>"; */

    /* Obtener nombre dle producto */
    $producto = $productos[0] ?? NULL;
?>


<?php require "partials/header.php" ?>

<img src="imagenes/peliculas_portada.jpg" class="rounded-circle mx-auto d-block" alt="...">

<?php require "partials/footer.php" ?>
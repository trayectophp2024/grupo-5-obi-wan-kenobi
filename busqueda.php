<?php require "partials/header.php" ?>

<?php

require_once "utils/funciones.php";
require_once "utils/db_connection.php";

/* Capturar lo que pone el usuario, o el termino busqueda */

$termino_busqueda = $_GET['q'] ?? '';


$productos = [];

if ($termino_busqueda) {
    /* Si hay un termino busqeuda, llamamos a la funcion buscar_producto */
    $productos = buscar_productos($conn, $termino_busqueda);
}
?>

<main class="container">
    <h1 class="text-center">Resultados de la busqueda</h1>

    <?php if ($termino_busqueda && !empty($productos)) { ?>
        <div class="row ">
            <?php foreach ($productos as $producto) { ?>
                
                <div class="col-4 mt-4 mb-4">
                <a  href="<?= $producto['tabla'] ?>_particular.php?categorias=<?= $producto['tabla'] ?>&id=<?= $producto['id']?>">
                    <div class="card" style="width: 18rem;">
                        <img src="imagenes/<?= $producto['imagen'] ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><?= $producto['nombre'] ?></h5>
                        </div>
                        </a>
                    </div>
                   
                </div>
            <?php } ?>
        </div>
    <?php } elseif ($termino_busqueda) { ?>
        <p class="text-center fs-3" style="color: #674636">No se encontraron items para el termino de busqueda <?= $termino_busqueda ?></p>
    <?php } else { ?>
        <p class="text-center  fs-3" style="color: #674636">El campo de busqueda no puede estar vacio</p>


    <?php } ?>
</main>

<?php require "partials/footer.php" ?>
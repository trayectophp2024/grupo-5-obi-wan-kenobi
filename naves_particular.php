<?php

require_once "utils/funciones.php";
require_once "utils/db_connection.php";


$tabla = $_GET['categorias'] ?? FALSE;
$id = $_GET['id'] ?? FALSE;

$productos = categoria_particular($conn, $tabla, $id);

/*     echo "<pre>";
    var_dump($productos);
    echo "</pre>"; */

/* Obtener nombre dle producto */
$producto = $productos[0] ?? NULL;
?>


<?php require "partials/header.php" ?>

<img width="150px" src="imagenes/nave-logo.png" class="rounded-circle mx-auto d-block m-3" alt="...">

<div class="d-flex mb-3">
  <div class="me-auto p-2">
    <img width="700px" src="imagenes/<?= $producto['imagen'] ?>" alt="">
  </div>
  <div class="particular">
    <div class="p-5">
      <h1 class="card-title mb-4 text-center"><?= $producto['nombre'] ?></h1>
      <p class="card-text text-center fs-4"><?= $producto['descripcion'] ?></p>
      <ul class="list-group list-group-flush">
        <li class="list-group-item fs-5">Tipo: <?= $producto['tipo'] ?></li>
        <li class="list-group-item fs-5">Fabricante: <?= $producto['fabricante'] ?></li>
        <li class="list-group-item fs-5">Longitud: <?= $producto['longitud'] ?></li>
        <li class="list-group-item fs-5">Velocidad Maxima: <?= $producto['velocidad_maxima'] ?></li>
        <li class="list-group-item fs-5">Armamento: <?= $producto['armamento'] ?></li>
        <li class="list-group-item fs-5">Capacidad: <?= $producto['capacidad'] ?></li>
      </ul>
    </div>
  </div>
</div>

<?php require "partials/footer.php" ?>
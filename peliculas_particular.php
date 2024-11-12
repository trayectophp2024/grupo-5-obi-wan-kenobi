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

<img src="imagenes/peliculas_portada.jpg" class="rounded-circle mx-auto d-block m-3" alt="...">

  <div class="d-flex mb-3">
    <div class="me-auto p-2">
      <img width="400px" src="imagenes/<?=$producto['imagen']?>" alt="">
    </div>
    <div class="particular">
    <div class="p-5">
      <h1 class="card-title mb-4 text-center"><?=$producto['nombre']?></h1>
      <p class="card-text text-center fs-4"><?=$producto['descripcion']?></p>
      <ul class="list-group list-group-flush">
        <li class="list-group-item fs-5">Director: <?= $producto['director'] ?></li>
        <li class="list-group-item fs-5">Año de estreno: <?= $producto['año_estreno'] ?></li>
        <li class="list-group-item fs-5">Duración: <?= $producto['duracion'] ?> minutos</li>
      </ul>
    </div>
    </div>
  </div>
  
<?php require "partials/footer.php" ?>
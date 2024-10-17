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

<img width="150px" src="imagenes/nave-logo.png" class="rounded-circle mx-auto d-block" alt="...">

  <div class="d-flex mb-3">
    <div class="me-auto p-2">
      <img width="500px" src="imagenes/<?=$producto['imagen']?>" alt="">
    </div>
    <div class="particular">
    <div class="p-5">
      <h2 class="card-title fs-2 mb-4 text-center"><?=$producto['nombre']?></h2>
      <p class="card-text text-center"><?=$producto['descripcion']?></p>
    </div>
    </div>
  </div>
  
<?php require "partials/footer.php" ?>
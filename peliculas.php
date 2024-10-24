<?php

    require_once "utils/funciones.php";
    require_once "utils/db_connection.php";

        /* Capturamos la tabla que viene por GET (URL) */

        
        $tabla = $_GET['categoria'] ?? false;

       /* Tablas alidas */
       $tablas = [
            'naves' => 'naves',
            'peliculas' => 'peliculas',
            'personajes' => 'personajes',
            'sables' => 'sables'
       ];

       /* Comprobar si el array existe */

       if (!array_key_exists($tabla, $tablas)) {
        header('Location: error404.php');
       }

        /* Llamar a la funcionm */

        $categorias = listar_todo($conn, $tabla);

        /*  echo "<pre>";
        var_dump($categorias);
        echo "</pre>";  */

?>

<?php require "partials/header.php" ?>

<main class="container">
<img src="imagenes/peliculas_portada.jpg" class="rounded-circle mx-auto d-block" alt="...">
    <div class="row">
        <?php foreach($categorias as $producto) { ?>
            <div class="col-4 mt-4 mb-4">
            <a href="pelicula_particular.php?categorias=<?= $tabla ?>&id=<?= $producto['id']?>">
                    <div class="card" style="width: 18rem;">
                        <img src="imagenes/<?=$producto['imagen'];?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?=$producto['nombre'];?></h5>
                            
                        </div>

                    </div>
                    </a>
                </div>

        <?php } ?>
    </div>

</main>

<?php require "partials/footer.php" ?>
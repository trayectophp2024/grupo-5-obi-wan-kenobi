<?php require "partials/header.php";

require_once "utils/db_connection.php";

?>



<div class="text-center">
    <div class="row mt-5">
        <div class="col align-self-start">
            <a href="peliculas.php?categoria=peliculas" class="d-block mb-5 ">
                <img class="rounded-circle border border-dark" width="200px" src="imagenes/peliculas_portada.jpg" alt="">
            </a>
            <a href="naves.php?categoria=naves" class="d-block mb-5">
                <img class="rounded-circle border border-dark" width="200px" src="imagenes/nave-logo.png" alt="">
            </a>
        </div>
        <div class="col align-self-center">
            <div>
                <img class="rounded-circle border border-dark" src="imagenes/nombre_portada.jpg" alt="">
            </div>
        </div>
        <div class="col align-self-start">
            <a href="personajes.php?categoria=personajes" class="d-block mb-5 ">
                <img class="rounded-circle border border-dark" width="200px" src="imagenes/personaje.webp" alt="">
            </a>
            <a  href="sables.php?categoria=sables" class="d-block mb-5">
                <img class="rounded-circle border border-dark" width="200px" src="imagenes/sable.jpg" alt="">
            </a>
        </div>
    </div>
</div>


<?php require "partials/footer.php" ?>
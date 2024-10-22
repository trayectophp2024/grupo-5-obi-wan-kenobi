<?php

/* Listar categoria por tabla  */
function listar_todo($conn, $tabla)
{


    /* 1- Realizar consulta o query */
    $sqlPersonajes = "SELECT * FROM " . $tabla . ";";

    /* 2- Ejecutar la consulta */
    $result =  $conn->query($sqlPersonajes);

    /* 3- Retornar y convertir la consula en un array asociativo */

    return $result->fetch_all(MYSQLI_ASSOC);
}

/* Listar un producto en particular */

function categoria_particular($conn, $tabla, $id)
{
    /* Realizar consulta o query */
    $sqlPersonajes = " SELECT * FROM " . $tabla . " WHERE id = " . $id;

    /* 2- Ejecutar la consulta */
    $result = $conn->query($sqlPersonajes);

    /* 3- Retornar y convertir la consulta en un array asociativo */
    return $result->fetch_all(MYSQLI_ASSOC);
}

/* Funcion busqueda */
function buscar_productos($conn, $termino_busqueda)
{
    /* Escapar el termino de busqueda para evitar inyecciones SQSL */

    $termino_busqueda = $conn->real_escape_string($termino_busqueda);

    /* Consultas para buscar en la figuras */
    $sqlNaves = "SELECT 'naves' as tabla, id, nombre, descripcion, tipo, fabricante, longitud, velocidad_maxima, armamento, capacidad, imagen FROM naves
        WHERE LOWER(nombre) LIKE '%$termino_busqueda%'
         ";

    /* Consultas para buscar en la monopatin */
    $sqlPeliculas = "SELECT 'peliculas' as tabla, id, nombre, episodio, descripcion, director, año_estreno, duracion, imagen FROM peliculas
        WHERE LOWER(nombre) LIKE '%$termino_busqueda%'
         ";

    /* Consultas para buscar en la juegosmesa */
    /* El LOWER es para que busque sin importar mayuscula y minuscula */
    $sqlPersonajes = "SELECT 'personajes' as tabla, id, nombre, descripcion, especie, afiliacion, planeta_natal, habilidades, arma, actor, imagen FROM personajes
        WHERE LOWER(nombre) LIKE '%$termino_busqueda%'
         ";

    $sqlSables = "SELECT 'sables' as tabla, id, nombre, descripcion, color, propietario, afiliacion, cristal, imagen FROM sables
WHERE LOWER(nombre) LIKE '%$termino_busqueda%'
 ";

    /* Ejecutar la consulta y convertir en un array asociativo */
    $resultNaves = $conn->query($sqlNaves)->fetch_all(MYSQLI_ASSOC);
    $resultPeliculas = $conn->query($sqlPeliculas)->fetch_all(MYSQLI_ASSOC);
    $resultPersonajes = $conn->query($sqlPersonajes)->fetch_all(MYSQLI_ASSOC);
    $resultSables = $conn->query($sqlSables)->fetch_all(MYSQLI_ASSOC);


    /* Combinar los resultados de las tres tablas */

    $resultado = array_merge($resultNaves, $resultPeliculas, $resultPersonajes, $resultSables);

    return $resultado;
}

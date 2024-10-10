<?php

/* Listar categoria por tabla  */
function listar_todo($conn, $tabla) {


    /* 1- Realizar consulta o query */
    $sqlPersonajes="SELECT * FROM " . $tabla . ";";

    /* 2- Ejecutar la consulta */
    $result=  $conn->query($sqlPersonajes);

    /* 3- Retornar y convertir la consula en un array asociativo */

    return $result->fetch_all(MYSQLI_ASSOC);
}

/* Listar un producto en particular */

function categoria_particular ($conn, $tabla, $id){
    /* Realizar consulta o query */
    $sqlPersonajes=" SELECT * FROM ". $tabla . " WHERE id = " . $id;

    /* 2- Ejecutar la consulta */
    $result=$conn->query($sqlPersonajes);

    /* 3- Retornar y convertir la consulta en un array asociativo */
    return $result->fetch_all(MYSQLI_ASSOC);
}

?>
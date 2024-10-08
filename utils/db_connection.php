<?php

/* Conectamos a la base de datos */
$host= "localhost";
$user = "root";
$password ="";
$database ="star_wars";

$conn= new mysqli($host, $user, $password, $database);


/* Verificamos conexion */

if ($conn ->connect_error) {
    die("Conexion fallida:" . $conn ->connect_error);
}/* else {
    echo "Conexion exiosa con la base de datos";
} */

?>
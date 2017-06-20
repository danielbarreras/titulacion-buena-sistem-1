<?php

session_start();

$usuario= $_SESSION['usuario'];

$productofavorito = $_GET['tituloproducto'];

$enlace= $_POST['enlace'];

$coneccion = $_POST['coneccion'];


$postutc = $_GET['utc'];




//procesado

$conexion = sqlite_open('basedato/chatear.db');

$consulta = 

<<<SQL

INSERT INTO favoritos VALUES ('$postutc','$usuario','$productofavorito','$enlace')

SQL;

$resultado = sqlite_exec($conexion,$consulta);

sqlite_close($conexion);



include "index.php";

?>
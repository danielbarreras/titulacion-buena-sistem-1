<?php

session_start();

$usuario= $_SESSION['usuario'];

$nombrecategoria = $_POST['nombrecategoria'];

$enlace= $_POST['enlace'];

$coneccion = $_POST['coneccion'];


$postutc = date('U');




//procesado

$conexion = sqlite_open('basedato/chatear.db');

$consulta = 

<<<SQL

INSERT INTO categorias VALUES ('$postutc','$usuario','$nombrecategoria','$enlace','$coneccion')

SQL;

$resultado = sqlite_exec($conexion,$consulta);

sqlite_close($conexion);



include "devolvercategorias.php";

?>
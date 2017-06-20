<?php

session_start();

$usuario1= $_SESSION['usuario'];


$textoform = $_POST['texto'];
$texto2form = $_POST['descripcion'];
$precio = $_POST['precio'];

$postutc = date('U');
$postanio = date('Y');
$postmes = date('m');
$postdia = date('d');
$posthora = date('H');
$postminuto = date('i');
$postsegundo = date('s');
$image = $_FILES["file"]["name"];


//procesado

$conexion = sqlite_open('basedato/chatear.db');

$consulta = 

<<<SQL

INSERT INTO preguntas VALUES ('$postutc','$postanio','$postmes','$postdia','$posthora','$postminuto','$postsegundo','$usuario1','$textoform')

SQL;

$resultado = sqlite_exec($conexion,$consulta);

sqlite_close($conexion);

include "devolverpregunta.php";

?>
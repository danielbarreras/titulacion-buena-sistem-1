<?php

session_start();

$usuario1= $_SESSION['usuario'];


$textoform = $_POST['texto'];
$titulo = $_POST['encabezado'];
$precio = $_POST['precio'];

$postutc = date('U');
$postanio = date('Y');
$postmes = date('m');
$postdia = date('d');
$posthora = date('H');
$postminuto = date('i');
$postsegundo = date('s');



//procesado

$conexion = sqlite_open('basedato/chatear.db');

$consulta = 

<<<SQL

INSERT INTO condicionesuso VALUES ('$postutc','$postanio','$postmes','$postdia','$posthora','$postminuto','$postsegundo','$usuario1','$titulo','$textoform')

SQL;

$resultado = sqlite_exec($conexion,$consulta);

sqlite_close($conexion);

include "devolvercondicionesuso.php";

?>
<?php

$codutc = $_GET['usuario'];
$prod = $_GET['productofavorito'];

$conexion = sqlite_open('basedato/chatear.db');

$consulta = "DELETE FROM favoritos WHERE usuario='".$codutc."' and productofavorito='".$prod."'";

$resultado = sqlite_query($conexion,$consulta);

sqlite_close($conexion);

include "index.php";

?>

<?php

$codutc = $_GET['utc'];

$conexion = sqlite_open('basedato/chatear.db');

$consulta = "DELETE FROM categorias WHERE utc='".$codutc."'";

$resultado = sqlite_query($conexion,$consulta);

sqlite_close($conexion);

include "indexc.php";

?>

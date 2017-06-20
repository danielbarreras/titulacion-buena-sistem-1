<?php

session_start();



$usuario = $_POST['usuarioadmin'];
$contrasena = $_POST['contrasenaadmin'];

$conexion = sqlite_open('basedato/administradores.db');

$peticion = "SELECT * FROM administradores WHERE usuarioadmin = '".$usuario."' and contrasenaadmin = '".$contrasena."'";

$ejecuto = sqlite_query($conexion,$peticion);

while($fila = sqlite_fetch_array($ejecuto)){

if($usuario = $fila['usuarioadmin'] && $contrasena = $fila['contrasenaadmin']){

$_SESSION['logiaradmin'] = "yes";

$_SESSION['logiarusuadmin'] = $fila['usuarioadmin'];

echo'

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=loginadministrador.php"
	</head>
</html>

';
	
} else{
$_SESSION['logiaradmin'] = "no";

echo'

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=loginadministrador.php"
	</head>
</html>

';
}


}
echo'

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=indexadministrador.php"
	</head>
</html>

';
?>
<?php

session_start();



$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$conexion = sqlite_open('basedato/chatear.db');

$peticion = "SELECT * FROM info WHERE usuario = '".$usuario."' and contrasena = '".$contrasena."'";

$ejecuto = sqlite_query($conexion,$peticion);

while($fila = sqlite_fetch_array($ejecuto)){

if($usuario = $fila['usuario'] && $contrasena = $fila['contrasena']){

$_SESSION['logiar'] = "yes";

$_SESSION['logiarusu'] = $fila['usuario'];

echo'

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=index.php"
	</head>
</html>

';
	
} else{
$_SESSION['logiar'] = "no";

echo'

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=index.php"
	</head>
</html>

';
}


}
echo'

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=index.php"
	</head>
</html>

';
?>

<?php

session_start();


$contador = 0;
$utc = date('U');
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$fechanaci = $_POST['fechanaci'];
$titulo = $_POST['titulo'];






$conexion = sqlite_open('basedato/chatear.db');

$consulta = "SELECT * FROM info";

$resultado = sqlite_query($conexion, $consulta);

while($fila = sqlite_fetch_array($resultado)){

	if($fila['usuario'] == $usuario){
	
	}else{}

}
 sqlite_close($conexion);

//creo inserto un nuevo usuario

if( $contador == 0 && $utc && $usuario && $contrasena && $nombre && $email && $fechanaci && $titulo){
	$conexion = sqlite_open('basedato/chatear.db');

	$consulta = "INSERT INTO info VALUES ('".$utc."','".$usuario."','".$contrasena."','".$nombre."','".$email."','".$fechanaci."','".$titulo."')";

	$ejecuto = sqlite_exec($conexion,$consulta);

	sqlite_close($conexion);
	
	
	
$nombre=$_POST["usuario"];
$mail=$_POST["email"];
$mensaje=$_POST["contrasena"];

echo "<h2>el mensaje que  enviates  es:</h2>";
echo "<br/>";

echo "usuario:";
echo $nombre;
echo "<br/>";
echo "email:";
echo $mail;
echo "<br/>";
echo "contraceña:";

echo $mensaje;

echo "<br/>";


$asunto="oportunidades mx";
$mensajemail= $nombre."con el  email".$mail."te  a enbiado un mensaje  que  dice".$mensaje;
$male="<<<usuario:".$nombre."  <<<email:".$mail."  <<<contraceña:".$mensaje;

if(mail($mail,$asunto,$male)){
	
	echo "tu correo se  llego  asu  destino";
	}else{
		
		echo"tu correo fallo";}

echo'

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=index.php"
	</head>
</html>

';

}else{echo'
<html>
	<head>
		<meta http-equiv="REFRESH" content="3;url=index.php?fromregistro=yes"
	</head>

<body>
<h1>
El usuario creado ya existe o  estan mal tus  datos o dejastes  espacios  sin llenar
</h1>
</body>
</html>
';} 

?>

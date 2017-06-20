<?php

session_start();



$utc1 = date('U');
$usuario = $_POST['usuarioadmin'];
$contrasena = $_POST['contrasenaadmin'];
$nombre = $_POST['nombreadmin'];
$email = $_POST['emailadmin'];
$fechanaci = $_POST['fechanaciadmin'];
$telefono = $_POST['telefonoadmin'];
$direccion = $_POST['direccionadmin'];
$puesto = $_POST['puestoadmin'];






$conexion = sqlite_open('basedato/administradores.db');

$consulta = "SELECT * FROM administradores";

$resultado = sqlite_query($conexion, $consulta);

while($fila = sqlite_fetch_array($resultado)){

	if($fila['usuarioadmin'] == $usuario){
	
	}else{}

}
 sqlite_close($conexion);

//creo inserto un nuevo usuario

if($utc && $usuario && $contrasena && $nombre && $email && $direccion && $telefono && $fechanaci && $puesto){
	$conexion = sqlite_open('basedato/administradores.db');

	$consulta = "INSERT INTO administradores VALUES ('".$utc1."','".$usuario."','".$contrasena."','".$nombre."','".$email."','".$direccion."','".$telefono."','".$fechanaci."','".$puesto."')";

	$ejecuto = sqlite_exec($conexion,$consulta);

	sqlite_close($conexion);
	
	
	
$nombre=$_POST["usuarioadmin"];
$mail=$_POST["emailadmin"];
$mensaje=$_POST["contrasenaadmin"];

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
$email= $nombre."con el  email".$mail."te  a enbiado un mensaje  que  dice".$mensaje;
$male="<<<usuario:".$nombre."  <<<email:".$mail."  <<<contraceña:".$mensaje;

if(mail($email,$asunto,$male)){
	
	echo "tu correo se  llego  asu  destino";
	}else{
		
		echo"tu correo fallo";}

echo'

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=indexadministrador.php"
	</head>
</html>

';

}else{echo'
<html>
	<head>
		<meta http-equiv="REFRESH" content="3;url=fromregistroadministrador.php"
	</head>

<body>
<h1>
El usuario creado ya existe o  estan mal tus  datos o dejastes  espacios  sin llenar
</h1>
</body>
</html>
';} 

?>

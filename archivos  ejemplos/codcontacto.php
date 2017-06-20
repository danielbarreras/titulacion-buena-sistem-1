<?

$nombre=$_POST["nombre"];
$mail=$_POST["email"];
$mensaje=$_POST["mensaje"];

echo "<h2>el mensaje que  enviates  es:</h2>";
echo "<br/>";

echo "nombre:";
echo $nombre;
echo "<br/>";
echo "email:";
echo $mail;
echo "<br/>";
echo "mensaje:";

echo $mensaje;

echo "<br/>";

$aquien="chivo_007_1@hotmail.com";
$asunto="mensaje  de clientes";
$mensajemail=$nombre."con el  email".$mail."te  a enbiado un mensaje  que  dice".$mensaje;
$male="nombre:".$nombre.
"      email:".$mail.
"      mensaje:".$mensaje;

if(mail($aquien,$asunto,$male)){
	
	echo "tu correo se  llego  asu  destino";
	}else{
		
		echo"tu correo fallo";}







?>
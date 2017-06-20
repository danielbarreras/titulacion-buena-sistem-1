<?php

session_start();

$usuario1= $_SESSION['usuario'];

$asunto = $_POST['asunto'];

$nombre = $_POST['nombre'];

$email = $_POST['email'];

$mensaje = $_POST['mensaje'];

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

INSERT INTO contacto VALUES ('$postutc','$postanio','$postmes','$postdia','$posthora','$postminuto','$postsegundo','$usuario1','$nombre','$asunto','$email','$mensaje')

SQL;

$resultado = sqlite_exec($conexion,$consulta);

sqlite_close($conexion);

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


$asunto="oportunidades mx";
$mensajemail= $nombre."con el  email".$mail."te  a enbiado un mensaje  que  dice".$mensaje;
$male="<<<nombre:".$nombre."  <<<email:".$mail."  <<<mensaje:".$mensaje;

if(mail($mail,$asunto,$male)){
	
	echo "tu correo se  llego  asu  destino";
	}else{
		
		echo"tu correo fallo";}

include "devolvercontactoadmin.php";

?>
<?php

session_start();

$usuario1= $_SESSION['usuario'];

$nombresubcategoria = $_POST['nombresubcategoria'];

$foto = $_POST['foto'];

$categoria = $_POST['categoria'];

$descripcion = $_POST['descripcion'];

$postutc = date('U');



//procesado

$conexion = sqlite_open('basedato/chatear.db');

$consulta = 

<<<SQL

INSERT INTO subcategorias VALUES ('$postutc','$nombresubcategoria','$categoria','$foto','$descripcion')

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

include "devolvercategorias.php";

?>
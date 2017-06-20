<?php


$utc = $_POST['utc'];



$textoform = $_POST['tituloproducto'];
$dbreve = $_POST['descripcionbreve'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$referencia = $_POST['referencia'];
$etiqueta = $_POST['etiqueta'];
$comentarios = $_POST['comentarios'];

$cantidad = $_POST['cantidad'];
$anexo = $_POST['anexo'];
$impuestos= $_POST['impuestos'];
$boton = $_POST['boton'];
$botoncarrito = $_POST['botoncarrito'];
$categoria = $_POST['categoria'];

$postanio = date('Y');
$postmes = date('m');
$postdia = date('d');
$posthora = date('H');
$postminuto = date('i');
$postsegundo = date('s');



$conexion = sqlite_open('basedato/chatear.db');

$consulta = "UPDATE producto SET tituloproducto = '".$textoform."', descripcionbreve='".$dbreve."', descripcionbreve='".$dbreve."',descripcion='".$descripcion."',referencia='".$referencia."',etiqueta='".$etiqueta."',comentarios='".$comentarios."',cantidad='".$cantidad."',anexo='".$anexo."',impuestos='".$impuestos."',boton='".$boton."',botoncarrito='".$botoncarrito."',categoria='".$categoria."', precio='".$precio."' WHERE utc='".$utc."'";

$resultado = sqlite_query($conexion,$consulta);

sqlite_close($conexion);


echo'

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=indexadministrador.php"
	</head>
</html>

';

?>

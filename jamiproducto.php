<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>INTECK</title>
 
    
<meta http-equiv="REFRESH" content="5;url=jami.php">
<Link rel=stylesheet href="css/tabla.css" type="text/css" media="all"/>


<style type="text/css">
</style>
</head>

<body>

<div class="container">
  <div class="content">
    <h1>productos</h1>
    
    
    

<? 






				







//Establecemos la conexion
$conexion = sqlite_open('basedato/chatear.db');


//Abrimos una tabla
echo "<h5>PRODUCTOS </h5>";
echo "<table border=1><thead><tr><td>utc</td><td>año</td><td>mes</td><td>dia</td><td>hora</td><td>minuto</td><td>segundo</td><td>usuario</td><td>referencia</td><td>etiqueta</td><td>foto completa</td><td>foto icono</td><td>precio</td><td>comentarios</td><td>cantidad</td><td>impuestos</td><td>descricion</td><td>anexo</td><td>titulo producto</td><td>boton</td><td>imagen1</td><td>imagen2</td><td>imagen3</td><td>imagen4</td><td>imagen5</td><td>imagen6</td><td>imagen7</td><td>imagen8</td><td>imagen9</td><td>imagen10</td><td>borarr</td><td>modificar</td></tr></thead>";



$consulta = "SELECT * FROM producto;";






$resultado = sqlite_query($conexion,$consulta);

while($fila = sqlite_fetch_array($resultado)){

echo "<tr><td>".$fila['utc']."</td><td>".$fila['anio']."</td><td>".$fila['mes']."</td><td>".$fila['dia']."</td><td>".$fila['hora']."</td><td>".$fila['minuto']."</td><td>".$fila['segundo']."</td><td>".$fila['usuario']."</td><td>".$fila['referencia']."</td><td>".$fila['etiqueta']."</td><td>".$fila['fotoscomplet']."</td><td>".$fila['fotoicono']."</td><td>".$fila['precio']."</td><td>".$fila['comentarios']."</td><td>".$fila['cantidad']."</td><td>".$fila['impuestos']."</td><td>".$fila['descripcion']."</td><td>".$fila['anexo']."</td><td>".$fila['tituloproducto']."</td><td>".$fila['boton']."</td><td>".$fila['img1']."</td><td>".$fila['img2']."</td><td>".$fila['img3']."</td><td>".$fila['img4']."</td><td>".$fila['img5']."</td><td>".$fila['img6']."</td><td>".$fila['img7']."</td><td>".$fila['img8']."</td><td>".$fila['img9']."</td><td>".$fila['img10']."</td><td><a href='borrarproducto.php?utc=".$fila['utc']."'>Eliminar</a></td><td><a href='actualizarproducto.php?titulomod=".$fila['tituloproducto']."&descripcionmod=".$fila['descripcion']."&preciomod=".$fila['precio']."&utc=".$fila['utc']."&dbrevemod=".$fila['descripcionbreve']."&comentariosmod=".$fila['comentarios']."&impuestosmod=".$fila['impuestos']."&referenciamod=".$fila['referencia']."&etiquetamod=".$fila['etiqueta']."&categoria=".$fila['categoria']."&botoncarritomod=".$fila['botoncarrito']."&cantidadmod=".$fila['cantidad']."&anexomod=".$fila['anexo']."&botonmod=".$fila['boton']."&img1mod=".$fila['img1']."&img2mod=".$fila['img2']."&img3mod=".$fila['img3']."&img4mod=".$fila['img4']."&img5mod=".$fila['img5']."&img6mod=".$fila['img6']."&img7mod=".$fila['img7']."&img8mod=".$fila['img8']."&img9mod=".$fila['img9']."&img10mod=".$fila['img10']."'>Modificar</a></td><tr>";



}

echo "</table>";

sqlite_close($conexion);





?>

<? if($_SESSION['logiaradmin'] == "yes"){
 include "formproducto.php";
  echo"<br><br><br><br>";

  

				}
				else {}


					?></body>
</html>
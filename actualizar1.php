
           <?php

$titulo = $_GET['titulomod'];
$descripcion = $_GET['descripcionmod'];
$precio = $_GET['preciomod'];
$utcmod = $_GET['utc'];

?>
<article><H1>ACTUALIZAR ARTICULOS</H1><BR /> <form action="actua.php" method="post" enctype="multipart/form-data">
 
<h5><input type="file" name="file" id="file"><br><br> dimenciones 140x140 jpg,png,gif </h5>

<input type="text" name="tituloproducto"  size=30  value="<?php echo $titulo; ?>">

<textarea name="descripcion"  size=80 style="height:170px; width:290px;" value="<?php echo $descripcion; ?>"><?php echo $descripcion; ?></textarea>
<input type="text" name="precio"  size=30  value="<?php echo $precio; ?>"><br>
<input type="hidden" name="utc" value="<?php echo $utcmod; ?>">

				<input type="submit" value="Enviar"><br><br><br>
                </form></article>
                
     
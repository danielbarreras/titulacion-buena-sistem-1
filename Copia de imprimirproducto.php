
<?
$conexion = sqlite_open('basedato/chatear.db');

$peticion = "SELECT * FROM producto LIMIT 12 " ;

$ejecucion = sqlite_query($conexion,$peticion); 






while ( $fila = sqlite_fetch_array($ejecucion)){

echo "<article>
<a href='enlaceproduc.php?utc=".$fila['utc']."'><div id='logoart' style='background:url(\"upload/".$fila['fotoicono']."\");'></div>
</a>	
<time>".$fila['dia']."-".$fila['mes']."-".$fila['anio']."</time>

					</br>
<a href='enlaceproduc.php?utc=".$fila['utc']."'><h1>".$fila['tituloproducto']."</h1></a>

<h3>".$fila['descripcion']."</h3>


<time>$".$fila['precio']."</time><h6>sku:".$fila['utc']."</h6>
					";
							if($_SESSION['logiar'] == "yes"){
						echo"<a href='borrarproducto.php?utc=".$fila['utc']."'>Eliminar</a>";echo"<br/>";}else{}
						
						echo"<a href=".$fila['boton'].">carrito</a>";echo"<br/>";
						
						if($_SESSION['logiar'] == "yes"){
						echo"<a href='index.php?titulomod=".$fila['tituloproducto']."&descripcionmod=".$fila['descripcion']."&preciomod=".$fila['precio']."&utc=".$fila['utc']."'>Modificar</a>";echo"<br/>";}else{}
						



					echo"</article>";


}

sqlite_close($conexion);

?>













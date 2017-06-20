<?
$conexion = sqlite_open('basedato/chatear.db');

$peticion = "SELECT * FROM producto LIMIT 12 " ;

$ejecucion = sqlite_query($conexion,$peticion); 






while ( $fila = sqlite_fetch_array($ejecucion)){

echo "<article>
<a href='enlaceproducadministrador.php?utc=".$fila['utc']."'><div id='logoart' style='background-image:url(\"upload/".$fila['img1']."\");'></div>
</a>	
<time>".$fila['dia']."-".$fila['mes']."-".$fila['anio']."</time>

					</br>
<a href='enlaceproduc.php?utc=".$fila['utc']."'><h1>".$fila['tituloproducto']."</h1></a>

<h3>".$fila['descripcionbreve']."</h3>


<time>$".$fila['precio']."</time><h6>sku:".$fila['utc']."</h6>
					";
							if($_SESSION['logiaradmin'] == "yes"){
						echo"<button><a href='borrarproducto.php?utc=".$fila['utc']."'>Eliminar</a></button>";echo"<br/>";}else{}
						
						echo"<button><a href=".$fila['botoncarrito'].">carrito</a></button>";echo"<br/>";
						echo"<button><a href=".$fila['boton'].">¡comprar!</a></button>";echo"<br/>";
						if($_SESSION['logiaradmin'] == "yes"){
						echo"<button><a href='actualizarproducto.php?titulomod=".$fila['tituloproducto']."&descripcionmod=".$fila['descripcion']."&preciomod=".$fila['precio']."&utc=".$fila['utc']."&dbrevemod=".$fila['descripcionbreve']."&comentariosmod=".$fila['comentarios']."&impuestosmod=".$fila['impuestos']."&referenciamod=".$fila['referencia']."&etiquetamod=".$fila['etiqueta']."&categoria=".$fila['categoria']."&botoncarritomod=".$fila['botoncarrito']."&cantidadmod=".$fila['cantidad']."&anexomod=".$fila['anexo']."&botonmod=".$fila['boton']."&img1mod=".$fila['img1']."&img2mod=".$fila['img2']."&img3mod=".$fila['img3']."&img4mod=".$fila['img4']."&img5mod=".$fila['img5']."&img6mod=".$fila['img6']."&img7mod=".$fila['img7']."&img8mod=".$fila['img8']."&img9mod=".$fila['img9']."&img10mod=".$fila['img10']."'>Modificar</a></button>";echo"<br/>";}else{}
						



					echo"</article>";


}

sqlite_close($conexion);

?>














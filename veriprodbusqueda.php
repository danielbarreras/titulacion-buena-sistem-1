



<?

$conexion = sqlite_open('basedato/chatear.db');

$peticion = "SELECT *FROM producto where tituloproducto='".$codutc."' LIMIT 20 " ;


$ejecucion = sqlite_query($conexion,$peticion); 






while ( $fila = sqlite_fetch_array($ejecucion)){


echo "<article>
<a href='enlaceproduc.php?utc=".$fila['utc']."'><h1>".$fila['tituloproducto']."</h1></a>

<a href='enlaceproduc1.php?utc=".$fila['utc']."'><div id='logoart' style='background-image:url(\"upload/".$fila['img1']."\");'></div></a>

<a href='imagen2.php?utc=".$fila['utc']."'><div id='logoart2' style='background-image:url(\"upload/".$fila['img2']."\");'></div>
</a>
<a href='imagen3.php?utc=".$fila['utc']."'><div id='logoart2' style='background-image:url(\"upload/".$fila['img3']."\");'></div>
</a>
<a href='imagen4.php?utc=".$fila['utc']."'><div id='logoart2' style='background-image:url(\"upload/".$fila['img4']."\");'></div>
</a>
<a href='imagen5.php?utc=".$fila['utc']."'><div id='logoart2' style='background-image:url(\"upload/".$fila['img5']."\");'></div>
</a><BR><BR><BR><BR><BR><BR><BR><BR>
<h1>DESCRIPCIONES DEL PRODUCTO</h1>	
		
<BR>

<h3>".$fila['descripcion']."</h3>
<h3> ".$fila['anexo']." </h3>
<h7>".$fila['cantidad']."</h7>


<h2>$".$fila['precio']."</h2><br>
						"; 
						echo"<button><a href=".$fila['botoncarrito']."><H4>carrito</h4></a></button>";
						echo"<button><a href=".$fila['boton']."><h4>¡comprar!</h4></a></button>";
						
							
					echo"</article>";


}

sqlite_close($conexion);

?>


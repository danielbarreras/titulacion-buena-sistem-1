
<?
$categoria = $_GET['nombrecategoria'];
$conexion = sqlite_open('basedato/chatear.db');

$peticion = "SELECT * FROM producto WHERE categoria='".$categoria."';  LIMIT 12 " ;

$ejecucion = sqlite_query($conexion,$peticion); 






while ( $fila = sqlite_fetch_array($ejecucion)){

echo "<h1>".$fila['categoria']."</h1><article>

<a href='enlaceproduc.php?utc=".$fila['utc']."'><div id='logoart' style='background-image:url(\"upload/".$fila['img1']."\");'></div>
</a><h1>".$fila['tituloproducto']."</h1>


<br>

	


					

<h7>".$fila['descripcionbreve']."</h7>


<time>$".$fila['precio']."</time><br>
					";
						
						echo"<button><a href=".$fila['botoncarrito']."><H4>carrito</h4></a></button>";
						echo"<button><a href=".$fila['boton']."><h4>¡comprar!</h4></a></button>";
						if($_SESSION['logiar'] == "yes"){
						echo"<a href='prosesarfavoritos.php?tituloproducto=".$fila['tituloproducto']."&utc=".$fila['utc']."'><h5>.AGREGALO COMO FAVORITO.</h5></a>";}
						
						
						



					echo"<br><br></article>";

}

sqlite_close($conexion);

?>













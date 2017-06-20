
<?
$conexion = sqlite_open('basedato/chatear.db');

$peticion = "SELECT * FROM producto  LIMIT 12  " ;

$ejecucion = sqlite_query($conexion,$peticion); 






while ( $fila = sqlite_fetch_array($ejecucion)){

echo "<article>
<br>
<a href='enlaceproduc.php?utc=".$fila['utc']."'><div id='logoart' style='background-image:url(\"upload/".$fila['img1']."\");'></div>
</a>

<h1>".$fila['tituloproducto']."</h1>

	


					

<h7>".$fila['descripcionbreve']."</h7>


<time>$".$fila['precio']."</time>
					";
						
						echo"<br><button><a href=".$fila['botoncarrito']."><H4>carrito</h4></a></button>";
						echo"<button><a href=".$fila['boton']."><h4>¡comprar!</h4></a></button><br><br><br>";
						if($_SESSION['logiar'] == "yes"){
						echo"<a href='prosesarfavoritos.php?tituloproducto=".$fila['tituloproducto']."&utc=".$fila['utc']."'><h7>.AGREGALO COMO FAVORITO.</h7></a>";}
						
			



					echo"</article>";


}

sqlite_close($conexion);

?>













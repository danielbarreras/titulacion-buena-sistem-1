<?
$conexion = sqlite_open('basedato/chatear.db');

$peticion = "SELECT * FROM postanuncios LIMIT 12 " ;

$ejecucion = sqlite_query($conexion,$peticion); 






while ( $fila = sqlite_fetch_array($ejecucion)){

echo "<article>
<time>".$fila['anio11']."-".$fila['mes11']."-".$fila['dia11']."</time>
					
<h1>".$fila['usuario11']."</h1><br>
<h4>".$fila['texto11']."</h4>
						";
							if($_SESSION['logiar'] == "yes"){
						echo"<a href='borrar.php?utc=".$fila['utc']."'>Eliminar</a>";echo"<br/>";}else{}
			echo"<a href='chat.php'>ver todos</a>";
					echo"</article>";


}

sqlite_close($conexion);

?>




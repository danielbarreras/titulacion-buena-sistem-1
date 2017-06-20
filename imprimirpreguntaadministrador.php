<?
$conexion = sqlite_open('basedato/chatear.db');

$peticion = "SELECT * FROM preguntas LIMIT 12 " ;

$ejecucion = sqlite_query($conexion,$peticion); 






while ( $fila = sqlite_fetch_array($ejecucion)){

echo "<article>
<time>".$fila['anio']."-".$fila['mes']."-".$fila['dia']."</time>
					
<h1>".$fila['usuario']."</h1><br>
<h4>".$fila['texto']."</h4>
						";
							if($_SESSION['logiaradmin'] == "yes"){
						echo"<a href='borrarpregunta.php?utc=".$fila['utc']."'>Eliminar</a>";echo"<br/>";}else{}
			
					echo"</article>";


}

sqlite_close($conexion);

?>




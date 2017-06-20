<?

$conexion = sqlite_open('basedato/chatear.db');

$peticion = "SELECT * FROM postventa LIMIT 12 " ;

$ejecucion = sqlite_query($conexion,$peticion); 






while ( $fila = sqlite_fetch_array($ejecucion)){

echo "<article>
<time>".$fila['anio2']."-".$fila['mes2']."-".$fila['dia2']."</time>
					
<h1>".$fila['usuario2']."</h1><br>
<h4>".$fila['texto2']."</h4>
						";
							if($_SESSION['logiar'] == "yes"){
						echo"<a href='borraven.php?utc=".$fila['utc']."'>Eliminar</a>";echo"<br/>";}else{}
			
					echo"</article>";


}

sqlite_close($conexion);

?>




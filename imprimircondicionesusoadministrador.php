<?
$conexion = sqlite_open('basedato/chatear.db');

$peticion = "SELECT * FROM condicionesuso LIMIT 4 " ;

$ejecucion = sqlite_query($conexion,$peticion); 






while ( $fila = sqlite_fetch_array($ejecucion)){

echo "<article>
<time>".$fila['anio']."-".$fila['mes']."-".$fila['dia']."</time>
					

<h3>".$fila['encabezado']."</h3>
<h4>".$fila['texto']."</h4>
						";
							if($_SESSION['logiaradmin'] == "yes"){
						echo"<a href='borrarcondicionesuso.php?utc=".$fila['utc']."'>Eliminar</a>";echo"<br/>";}else{}
			
					echo"</article>";


}

sqlite_close($conexion);

?>




<?
$conexion = sqlite_open('basedato/chatear.db');

$peticion = "SELECT * FROM entrega LIMIT 2 " ;

$ejecucion = sqlite_query($conexion,$peticion); 






while ( $fila = sqlite_fetch_array($ejecucion)){

echo "<article>
<time>".$fila['anio']."-".$fila['mes']."-".$fila['dia']."</time>
					

<h5>".$fila['titulo']."</h5>
<h4>".$fila['texto']."</h4>
						";
							
			
					echo"</article>";


}

sqlite_close($conexion);

?>




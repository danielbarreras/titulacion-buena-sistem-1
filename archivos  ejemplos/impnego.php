<?
$conexion = sqlite_open('basedato/chatear.db');

$peticion = "SELECT * FROM postnegocios LIMIT 12 " ;

$ejecucion = sqlite_query($conexion,$peticion); 






while ( $fila = sqlite_fetch_array($ejecucion)){

echo "<article>
<time>".$fila['anio1']."-".$fila['mes1']."-".$fila['dia1']."</time>
					
<h1>".$fila['usuario1']."</h1><br>
<h4>".$fila['texto1']."</h4>
						";
							if($_SESSION['logiar'] == "yes"){
						echo"<a href='borraneg.php?utc=".$fila['utc']."'>Eliminar</a>";echo"<br/>";}else{}
			
					echo"</article>";


}

sqlite_close($conexion);

?>




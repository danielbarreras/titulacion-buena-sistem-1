<?
$conexion = sqlite_open('basedato/chatear.db');

$peticion = "SELECT * FROM producto LIMIT 20 " ;

$ejecucion = sqlite_query($conexion,$peticion); 






while ( $fila = sqlite_fetch_array($ejecucion)){

echo "

					


<a href='enlaceproducetiquetas.php?utc=".$fila['utc']."'><h7>".$fila['etiqueta']."</h7></a>



						";
							
			
					echo"";


}

sqlite_close($conexion);

?>


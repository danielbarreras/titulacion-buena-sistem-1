<?
$conexion = sqlite_open('basedato/chatear.db');

$peticion = "SELECT * FROM subcategorias LIMIT 2 " ;

$ejecucion = sqlite_query($conexion,$peticion); 






while ( $fila = sqlite_fetch_array($ejecucion)){

echo "

					

<a href=".$fila['coneccion']."><h1>".$fila['nombresubcategoria']."</h1></a>


						";
							
			
					echo"";


}

sqlite_close($conexion);

?>


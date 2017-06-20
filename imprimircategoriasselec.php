<?
$conexion = sqlite_open('basedato/chatear.db');

$peticion = "SELECT * FROM categorias LIMIT 20 " ;
$ejecucion = sqlite_query($conexion,$peticion); 






while ( $fila = sqlite_fetch_array($ejecucion)){

echo "<option value=".$fila['nombrecategoria']."><h4>".$fila['nombrecategoria']."</h4></option>

					





						";
							
			
					echo"";


}

sqlite_close($conexion);

?>


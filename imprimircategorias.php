<?
$conexion = sqlite_open('basedato/chatear.db');

$peticion = "SELECT * FROM categorias LIMIT 7 " ;
$ejecucion = sqlite_query($conexion,$peticion); 






while ( $fila = sqlite_fetch_array($ejecucion)){

echo "<ul><li>

					

		<a href='categoriaslink.php?nombrecategoria=".$fila['nombrecategoria']."'>".$fila['nombrecategoria']."</a>
		
		
	








";

						
			
					echo"</li></ul>";


}				
		

sqlite_close($conexion);

?>


<?
$conexion = sqlite_open('basedato/chatear.db');

$peticion = "SELECT * FROM categorias LIMIT 20 " ;
$ejecucion = sqlite_query($conexion,$peticion); 






while ( $fila = sqlite_fetch_array($ejecucion)){

echo "

					

		<a href='categoriaslink.php?nombrecategoria=".$fila['nombrecategoria']."'><h1>".$fila['nombrecategoria']."</h1></a>
	
	
		
<button><a href='borrarcategoria.php?utc=".$fila['utc']."'>Eliminar</a></button></a>









						";
			}





sqlite_close($conexion);

?>


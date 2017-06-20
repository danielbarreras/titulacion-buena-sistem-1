<?
$conexion = sqlite_open('basedato/chatear.db');

$peticion = "SELECT * FROM info LIMIT 20 " ;
$ejecucion = sqlite_query($conexion,$peticion); 






while ( $fila = sqlite_fetch_array($ejecucion)){

echo "

					

		<button><a href='usuariolink.php?usuario=".$fila['usuario']."'><h5>".$fila['usuario']."</h5></a></button>
		
		


<a href='basedato/chatear.db'>respaldo</a>








						";
			}
						
					echo"";




sqlite_close($conexion);

?>


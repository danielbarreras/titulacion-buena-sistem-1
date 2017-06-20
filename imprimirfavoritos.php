
<?

$conexion = sqlite_open('basedato/chatear.db');

$peticion = "SELECT DISTINCT * FROM  favoritos  where usuario='".$_SESSION['usuario']."'  LIMIT 12  " ;

$ejecucion = sqlite_query($conexion,$peticion); 






while ( $fila = sqlite_fetch_array($ejecucion)){

echo "








<button><a href='favoritolink.php?productofavorito=".$fila['productofavorito']."'><h3>".$fila['productofavorito']."<a href='borrarfavoritos.php?usuario=".$fila['usuario']."&productofavorito=".$fila['productofavorito']."'>  x</a></h3></a></button>


					




					";
						
					
						
						



					echo"";


}

sqlite_close($conexion);

?>













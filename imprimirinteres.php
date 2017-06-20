
<?
$conexion = sqlite_open('basedato/chatear.db');

$peticion = "SELECT * FROM producto LIMIT 12 " ;

$ejecucion = sqlite_query($conexion,$peticion); 






while ( $fila = sqlite_fetch_array($ejecucion)){

echo "

<a href='enlaceproduc.php?utc=".$fila['utc']."'><div id='logomini' style='background-image:url(\"upload/".$fila['img1']."\");'></div>
</a>


					";
						
					
						
						



					echo"" 
					;


}

sqlite_close($conexion);

?>













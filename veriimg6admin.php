




<?
$conexion = sqlite_open('basedato/chatear.db');

$peticion = "SELECT *FROM producto where utc='".$codutc."' LIMIT 120 " ;


$ejecucion = sqlite_query($conexion,$peticion); 






while ( $fila = sqlite_fetch_array($ejecucion)){


echo "
<a href='enlaceproducadministrador.php?utc=".$fila['utc']."'><h2>CERRAR</h2></a><BR><BR>
<a href='imagen7admin.php?utc=".$fila['utc']."'><h2>siguiente</h2></a><h2>:::::::</h2><a href='imagen5admin.php?utc=".$fila['utc']."'><h2>atras</h2></a>
<BR>

<a href= upload/".$fila['img6']."><div id='logo' style='background-image:url(\"upload/".$fila['img6']."\");'></br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></a>
</div>


<h1>".$fila['tituloproducto']."</h1></br></br>

<h3>".$fila['descripcion']."</h3>	




						"; 
						
							
	
					echo"";


}

sqlite_close($conexion);

?>


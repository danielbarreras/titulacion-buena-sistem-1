




<?
$conexion = sqlite_open('basedato/chatear.db');

$peticion = "SELECT *FROM producto where utc='".$codutc."' LIMIT 120 " ;


$ejecucion = sqlite_query($conexion,$peticion); 






while ( $fila = sqlite_fetch_array($ejecucion)){


echo "
<a href='enlaceproduc.php?utc=".$fila['utc']."'><h2>CERRAR</h2></a><BR><BR>
<a href='imagen9.php?utc=".$fila['utc']."'><h2>siguiente</h2></a><h2>:::::::</h2><a href='imagen7.php?utc=".$fila['utc']."'><h2>atras</h2></a>
<BR>

<a href= upload/".$fila['img8']."><div id='logo' style='background-image:url(\"upload/".$fila['img8']."\");'></br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></a>
</div>


<h1>".$fila['tituloproducto']."</h1></br></br>

<h7>".$fila['descripcion']."</h7>	
</div>



						"; 
						
							
	
					echo"";


}

sqlite_close($conexion);

?>


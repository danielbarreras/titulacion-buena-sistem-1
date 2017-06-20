




<?
$conexion = sqlite_open('basedato/chatear.db');

$peticion = "SELECT *FROM producto where utc='".$codutc."' LIMIT 120 " ;


$ejecucion = sqlite_query($conexion,$peticion); 






while ( $fila = sqlite_fetch_array($ejecucion)){


echo " 


<div id='logo' style='background-image:url(\"upload/".$fila['img1']."\");'></div>







						"; 
						
	
					echo"";


}

sqlite_close($conexion);

?>


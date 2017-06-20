<? // $_SESSION['usuariotemporal'] = "jocarsa";

$conexion = sqlite_open('basedato/chatear.db');

$peticion = "SELECT * FROM info WHERE usuario ='".$_SESSION['logiarusu']."';";

$ejecuto = sqlite_query($conexion,$peticion);

while ($fila = sqlite_fetch_array($ejecuto)){
$_SESSION['utc'] = $fila['utc'];
$_SESSION['usuario'] = $fila['usuario'];
$_SESSION['contracena'] = $fila['contracena'];
$_SESSION['nombre'] = $fila['nombre'];

$_SESSION['email'] = $fila['email'];
$_SESSION['telefono'] = $fila['telefono'];
$_SESSION['fechanaci'] = $fila['fechanaci'];








}

sqlite_close($conexion);

?>

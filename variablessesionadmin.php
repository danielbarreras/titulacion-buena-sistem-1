<? // $_SESSION['usuariotemporal'] = "jocarsa";

$conexionadmin = sqlite_open('basedato/administradores.db');

$peticionadmin = "SELECT * FROM administradores WHERE usuarioadmin ='".$_SESSION['logiarusuadmin']."';";

$ejecutoadmin = sqlite_query($conexionadmin,$peticionadmin);

while ($fila = sqlite_fetch_array($ejecutoadmin)){
$_SESSION['utc'] = $fila['utc'];
$_SESSION['usuarioadmin'] = $fila['usuarioadmin'];
$_SESSION['contracenaadmin'] = $fila['contracenaadmin'];
$_SESSION['nombreadmin'] = $fila['nombreadmin'];
$_SESSION['direccionadmin'] = $fila['direccionadmin'];
$_SESSION['emailadmin'] = $fila['emailadmin'];
$_SESSION['telefonoadmin'] = $fila['telefonoadmin'];
$_SESSION['fechanaciadmin'] = $fila['fechanaciadmin'];
$_SESSION['puestoadmin'] = $fila['puestoadmin'];

}

sqlite_close($conexionadmin);

?>

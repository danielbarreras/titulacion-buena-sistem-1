<?
$conexion = sqlite_open('basedato/administradores.db') or die('Ha sido imposible establecer la conexion');
$consulta =
<<<SQL
CREATE TABLE administradores(
utc Int  auto increment Not Null,
usuarioadmin Char(50) Not Null,
contrasenaadmin Char(50) Not Null,
nombreadmin Char(5000),
emailadmin Char(1000),
direccionadmin Char(1000),
telefonoadmin Char(1000),
fechanaciadmin char(40),
puestoadmin char(80)


);

SQL;
//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion);

$conexion = sqlite_open('basedato/administradores.db') or die('Ha sido imposible establecer la conexion');
//peticion

$consulta =

<<<SQL
INSERT INTO administradores VALUES(000001,'zhibo','zhibobarreras','daniel barreras','sercar delas milpas','sercar delas milpas','sercar delas milpas','sercar delas milpas','info@menu.com');
SQL;

//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion);
?>
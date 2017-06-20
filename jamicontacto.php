<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>INTECK</title>
 
    
<meta http-equiv="REFRESH" content="5;url=jami.php">
<Link rel=stylesheet href="css/tabla.css" type="text/css" media="all"/>


<style type="text/css">
</style>
</head>

<body>

<div class="container">
  <div class="content">
    <h1>PANEL DE CONTROL....</h1>
    
    
    

<? 






				


$conexion = sqlite_open('basedato/chatear.db');


//Abrimos una tabla
echo "<h5>usuarios  </h5>";
echo "


<table border=1><thead><tr><th>utc</th><th>usuarios</th><th>contrseña</th><th>nombre</th><th>email</th><th>fecha  de  nacimiento</th><th>titulo</th></tr></thead>";

//Populamos la base de datos a una tabla, como formularios

$consulta = "SELECT * FROM info;";






$resultado = sqlite_query($conexion,$consulta);

while($fila = sqlite_fetch_array($resultado)){

echo "<tr><td>".$fila['utc']."</td><td>".$fila['usuario']."</td><td>".$fila['contrasena']."</td><td>".$fila['nombre']."</td><td>".$fila['email']."</td><td>".$fila['fechanaci']."</td><td>".$fila['titulo']."</td></tr>";

//echo $fila['Disco']." ".$fila['Artista']." ".$fila['Anio']."<br />";

}

echo "</table>";

sqlite_close($conexion);

$conexion = sqlite_open('basedato/administradores.db');


//Abrimos una tabla
echo "<h5>administradores  </h5>";
echo "<table border=1><thead><tr><th>utc</th><th>usuarios</th><th>ontrseña</th><th>nombre</th><th>email</th><th>direccion</th><th>telefono</th><td>fecha  de nacimiento</th><th>puesto</th></tr></thead>";

//Populamos la base de datos a una tabla, como formularios

$consulta = "SELECT * FROM administradores;";






$resultado = sqlite_query($conexion,$consulta);

while($fila = sqlite_fetch_array($resultado)){

echo "<tr><td>".$fila['utc']."</td><td>".$fila['usuarioadmin']."</td><td>".$fila['contrasenaadmin']."</td><td>".$fila['nombreadmin']."</td><td>".$fila['emailadmin']."</td><td>".$fila['direccionadmin']."</td><td>".$fila['telefonoadmin']."</td><td>".$fila['fechanaciadmin']."</td><td>".$fila['puestoadmin']."</td></tr>";

//echo $fila['Disco']." ".$fila['Artista']." ".$fila['Anio']."<br />";

}

echo "</table>";

sqlite_close($conexion);

$conexion = sqlite_open('basedato/chatear.db');


//Abrimos una tabla
echo "<h5>contacto  </h5>";
echo "<table border=1><thead><tr><td>utc</td><td>año</td><td>mes</td><td>dia</td><td>hora</td><td>minuto</td><td>segundo</td><td>usuario</td><td>nombre</td><td>asunto</td><td>email</td><td>mensaje</td><td>borrar</td></tr></thead>";

//Populamos la base de datos a una tabla, como formularios

$consulta = "SELECT * FROM contacto;";






$resultado = sqlite_query($conexion,$consulta);

while($fila = sqlite_fetch_array($resultado)){

echo "<tr><td>".$fila['utc']."</td><td>".$fila['anio']."</td><td>".$fila['mes']."</td><td>".$fila['dia']."</td><td>".$fila['hora']."</td><td>".$fila['minuto']."</td><td>".$fila['segundo']."</td><td>".$fila['usuario']."</td><td>".$fila['nombre']."</td><td>".$fila['asunto']."</td><td>".$fila['email']."</td><td>".$fila['mensaje']."</td> <td><a href='borrarcontacto.php?utc=".$fila['utc']."'>Eliminar</a> </td></tr>";

//echo $fila['Disco']." ".$fila['Artista']." ".$fila['Anio']."<br />";

}

echo "</table>";

sqlite_close($conexion);




//Establecemos la conexion
$conexion = sqlite_open('basedato/chatear.db');


//Abrimos una tabla
echo "<h5>PRODUCTOS </h5>";
echo "<table border=1><thead><tr><td>utc</td><td>año</td><td>mes</td><td>dia</td><td>hora</td><td>minuto</td><td>segundo</td><td>usuario</td><td>referencia</td><td>etiqueta</td><td>foto completa</td><td>foto icono</td><td>precio</td><td>comentarios</td><td>cantidad</td><td>impuestos</td><td>descricion</td><td>anexo</td><td>titulo producto</td><td>boton</td><td>imagen1</td><td>imagen2</td><td>imagen3</td><td>imagen4</td><td>imagen5</td><td>imagen6</td><td>imagen7</td><td>imagen8</td><td>imagen9</td><td>imagen10</td></tr></thead>";



$consulta = "SELECT * FROM producto;";






$resultado = sqlite_query($conexion,$consulta);

while($fila = sqlite_fetch_array($resultado)){

echo "<tr><td>".$fila['utc']."</td><td>".$fila['anio']."</td><td>".$fila['mes']."</td><td>".$fila['dia']."</td><td>".$fila['hora']."</td><td>".$fila['minuto']."</td><td>".$fila['segundo']."</td><td>".$fila['usuario']."</td><td>".$fila['referencia']."</td><td>".$fila['etiqueta']."</td><td>".$fila['fotoscomplet']."</td><td>".$fila['fotoicono']."</td><td>".$fila['precio']."</td><td>".$fila['comentarios']."</td><td>".$fila['cantidad']."</td><td>".$fila['impuestos']."</td><td>".$fila['descripcion']."</td><td>".$fila['anexo']."</td><td>".$fila['tituloproducto']."</td><td>".$fila['boton']."</td><td>".$fila['img1']."</td><td>".$fila['img2']."</td><td>".$fila['img3']."</td><td>".$fila['img4']."</td><td>".$fila['img5']."</td><td>".$fila['img6']."</td><td>".$fila['img7']."</td><td>".$fila['img8']."</td><td>".$fila['img9']."</td><td>".$fila['img10']."</td><tr>";



}

echo "</table>";

sqlite_close($conexion);




$conexion = sqlite_open('basedato/chatear.db');


//Abrimos una tabla
echo "<h5>ENVIO.... </h5>";
echo "<table border=1><thead><tr><td>utc</td><td>usuario</td><td>nombre</td><td>apellido</td><td>codigo postal</td><td>direccion</td><td>direccion2</td><td>estado</td><td>pais</td><td>comentario</td><td>identificador</td></tr></thead>";



$consulta = "SELECT * FROM envio;";






$resultado = sqlite_query($conexion,$consulta);

while($fila = sqlite_fetch_array($resultado)){

echo "<tr><td>".$fila['utc']."</td><td>".$fila['usuario']."</td><td>".$fila['nombre']."</td><td>".$fila['apellido']."</td><td>".$fila['codigopostal']."</td><td>".$fila['direccion']."</td><td>".$fila['direccion2']."</td><td>".$fila['estado']."</td><td>".$fila['pais']."</td><td>".$fila['comentario']."</td><td>".$fila['identificador']."</td><tr>";



}

echo "</table>";

sqlite_close($conexion);
$conexion = sqlite_open('basedato/chatear.db');


//Abrimos una tabla
echo "<h5>FACTURA.... </h5>";
echo "<table border=1><thead><tr><td>utc</td><td>año</td><td>mes</td><td>dia</td><td>hora</td><td>minuto</td><td>segundo</td><td>usuario</td><td>nombre</td><td>apellido</td><td>id.fiscal</td><td>codigo postal</td><td>direccion</td><td>direccion2</td><td>estado</td><td>pais</td><td>comentario</td><td>identificador</td></tr></thead>";



$consulta = "SELECT * FROM factura;";






$resultado = sqlite_query($conexion,$consulta);

while($fila = sqlite_fetch_array($resultado)){

echo "<tr><td>".$fila['utc']."</td><td>".$fila['anio']."</td><td>".$fila['mes']."</td><td>".$fila['dia']."</td><td>".$fila['hora']."</td><td>".$fila['minuto']."</td><td>".$fila['segundo']."</td><td>".$fila['usuario']."</td><td>".$fila['nombre']."</td><td>".$fila['apellido']."</td><td>".$fila['idfiscal']."</td><td>".$fila['codigopostal']."</td><td>".$fila['direccion']."</td><td>".$fila['direccion2']."</td><td>".$fila['estado']."</td><td>".$fila['pais']."</td><td>".$fila['comentario']."</td><td>".$fila['identificador']."</td><tr>";



}

echo "</table>";

sqlite_close($conexion);



$conexion = sqlite_open('basedato/chatear.db');


//Abrimos una tabla
echo "<h5> PREGUNTAS... </h5>";
echo "<table border=1><thead><tr><td>utc</td><td>año</td><td>mes</td><td>dia</td><td>hora</td><td>minuto</td><td>segundo</td><td>usuario</td><td>texto</td></tr></thead>";



$consulta = "SELECT * FROM preguntas;";






$resultado = sqlite_query($conexion,$consulta);

while($fila = sqlite_fetch_array($resultado)){

echo "<tr><td>".$fila['utc']."</td><td>".$fila['anio']."</td><td>".$fila['mes']."</td><td>".$fila['dia']."</td><td>".$fila['hora']."</td><td>".$fila['minuto']."</td><td>".$fila['segundo']."</td><td>".$fila['usuario']."</td><td>".$fila['texto']."</td><tr>";



}

echo "</table>";

sqlite_close($conexion);
$conexion = sqlite_open('basedato/chatear.db');


//Abrimos una tabla
echo "<h5> SUBPREGUNTAS... </h5>";
echo "<table border=1><thead><tr><td>utc</td><td>año</td><td>mes</td><td>dia</td><td>hora</td><td>minuto</td><td>segundo</td><td>usuario</td><td>texto</td></tr></thead>";



$consulta = "SELECT * FROM subpreguntas;";






$resultado = sqlite_query($conexion,$consulta);

while($fila = sqlite_fetch_array($resultado)){

echo "<tr><td>".$fila['utc']."</td><td>".$fila['anio']."</td><td>".$fila['mes']."</td><td>".$fila['dia']."</td><td>".$fila['hora']."</td><td>".$fila['minuto']."</td><td>".$fila['segundo']."</td><td>".$fila['usuario']."</td><td>".$fila['texto']."</td><tr>";



}

echo "</table>";

sqlite_close($conexion);


$conexion = sqlite_open('basedato/chatear.db');


//Abrimos una tabla
echo "<h5> CONDICIONES  DE USO.. </h5>";
echo "<table border=1><thead/><tr><td>utc</td><td>año</td><td>mes</td><td>dia</td><td>hora</td><td>minuto</td><td>segundo</td><td>usuario</td><td>encabezado</td><td>texto</td></tr></thead>";



$consulta = "SELECT * FROM condicionesuso;";






$resultado = sqlite_query($conexion,$consulta);

while($fila = sqlite_fetch_array($resultado)){

echo "<tr><td>".$fila['utc']."</td><td>".$fila['anio']."</td><td>".$fila['mes']."</td><td>".$fila['dia']."</td><td>".$fila['hora']."</td><td>".$fila['minuto']."</td><td>".$fila['segundo']."</td><td>".$fila['usuario']."</td><td>".$fila['encabezado']."</td><td>".$fila['texto']."</td><tr>";



}

echo "</table>";

sqlite_close($conexion);


$conexion = sqlite_open('basedato/chatear.db');


//Abrimos una tabla
echo "<h5> SOBRE... </h5>";
echo "<table border=1><thead><tr><td>utc</td><td>año</td><td>mes</td><td>dia</td><td>hora</td><td>minuto</td><td>segundo</td><td>usuario</td><td>texto</td><td>titulo</td></tr></thead>";



$consulta = "SELECT * FROM sobre;";






$resultado = sqlite_query($conexion,$consulta);

while($fila = sqlite_fetch_array($resultado)){

echo "<tr><td>".$fila['utc']."</td><td>".$fila['anio']."</td><td>".$fila['mes']."</td><td>".$fila['dia']."</td><td>".$fila['hora']."</td><td>".$fila['minuto']."</td><td>".$fila['segundo']."</td><td>".$fila['usuario']."</td><td>".$fila['texto']."</td><td>".$fila['titulo']."</td><tr>";



}

echo "</table>";

sqlite_close($conexion);

$conexion = sqlite_open('basedato/chatear.db');


//Abrimos una tabla
echo "<h5> ENTREGA... </h5>";
echo "<table border=1><thead><tr><td>utc</td><td>año</td><td>mes</td><td>dia</td><td>hora</td><td>minuto</td><td>segundo</td><td>usuario</td><td>texto</td><td>titulo</td></tr></thead>";



$consulta = "SELECT * FROM entrega;";






$resultado = sqlite_query($conexion,$consulta);

while($fila = sqlite_fetch_array($resultado)){

echo "<tr><td>".$fila['utc']."</td><td>".$fila['anio']."</td><td>".$fila['mes']."</td><td>".$fila['dia']."</td><td>".$fila['hora']."</td><td>".$fila['minuto']."</td><td>".$fila['segundo']."</td><td>".$fila['usuario']."</td><td>".$fila['texto']."</td><td>".$fila['titulo']."</td><tr>";



}

echo "</table>";

sqlite_close($conexion);

$conexion = sqlite_open('basedato/chatear.db');


//Abrimos una tabla
echo "<h5> TICKET... </h5>";
echo "<table border=1><thead><tr><td>utc</td><td>año</td><td>mes</td><td>dia</td><td>hora</td><td>minuto</td><td>segundo</td><td>usuario</td><td>titulo</td><td>numero del pedido</td><td>texto</td><td>imagen</td><td>archivo</td></tr></thead>";



$consulta = "SELECT * FROM ticket;";






$resultado = sqlite_query($conexion,$consulta);

while($fila = sqlite_fetch_array($resultado)){

echo "<tr><td>".$fila['utc']."</td><td>".$fila['anio']."</td><td>".$fila['mes']."</td><td>".$fila['dia']."</td><td>".$fila['hora']."</td><td>".$fila['minuto']."</td><td>".$fila['segundo']."</td><td>".$fila['usuario']."</td><td>".$fila['titulo']."</td><td>".$fila['numeropedido']."</td><td>".$fila['texto']."</td><td>".$fila['imagen']."</td><td>".$fila['archivo']."</td><tr>";



}

echo "</table>";

sqlite_close($conexion);

$conexion = sqlite_open('basedato/chatear.db');


//Abrimos una tabla
echo "<h5> TRANSPORTE... </h5>";
echo "<table border=1><thead><tr><td>utc</td><td>año</td><td>mes</td><td>dia</td><td>hora</td><td>minuto</td><td>segundo</td><td>usuario</td><td>tiempo</td><td>descripcion</td><td>precio</td><td>imagen</td></tr></thead>";



$consulta = "SELECT * FROM transporte;";






$resultado = sqlite_query($conexion,$consulta);

while($fila = sqlite_fetch_array($resultado)){

echo "<tr><td>".$fila['utc']."</td><td>".$fila['anio']."</td><td>".$fila['mes']."</td><td>".$fila['dia']."</td><td>".$fila['hora']."</td><td>".$fila['minuto']."</td><td>".$fila['segundo']."</td><td>".$fila['usuario']."</td><td>".$fila['tiempo']."</td><td>".$fila['descripcion']."</td><td>".$fila['precio']."</td><td>".$fila['imagen']."</td><tr>";



}

echo "</table>";

sqlite_close($conexion);



$conexion = sqlite_open('basedato/chatear.db');


//Abrimos una tabla
echo "<h5> CHAT... </h5>";
echo "<table border=1><thead><tr><td>utc</td><td>año</td><td>mes</td><td>dia</td><td>hora</td><td>minuto</td><td>segundo</td><td>usuario</td><td>texto</td></tr></thead>";



$consulta = "SELECT * FROM chat;";






$resultado = sqlite_query($conexion,$consulta);

while($fila = sqlite_fetch_array($resultado)){

echo "<tr><td>".$fila['utc']."</td><td>".$fila['anio']."</td><td>".$fila['mes']."</td><td>".$fila['dia']."</td><td>".$fila['hora']."</td><td>".$fila['minuto']."</td><td>".$fila['segundo']."</td><td>".$fila['usuario']."</td><td>".$fila['texto']."</td><tr>";



}

echo "</table>";

sqlite_close($conexion);

$conexion = sqlite_open('basedato/chatear.db');


//Abrimos una tabla
echo "<h5> SUBCHAT... </h5>";
echo "<table border=1><thead><tr><td>utc</td><td>año</td><td>mes</td><td>dia</td><td>hora</td><td>minuto</td><td>segundo</td><td>usuario</td><td>texto</td></tr></thead>";



$consulta = "SELECT * FROM subchat;";






$resultado = sqlite_query($conexion,$consulta);

while($fila = sqlite_fetch_array($resultado)){

echo "<tr><td>".$fila['utc']."</td><td>".$fila['anio']."</td><td>".$fila['mes']."</td><td>".$fila['dia']."</td><td>".$fila['hora']."</td><td>".$fila['minuto']."</td><td>".$fila['segundo']."</td><td>".$fila['usuario']."</td><td>".$fila['texto']."</td><tr>";



}

echo "</table>";

sqlite_close($conexion);




$conexion = sqlite_open('basedato/chatear.db');


//Abrimos una tabla
echo "<h5> CATEGORIAS... </h5>";
echo "<table border=1><thead><tr><td>utc</td><td>nombre  de la categoria</td><td>enlace</td><td>coneccion</td></tr></thead>";



$consulta = "SELECT * FROM categorias;";






$resultado = sqlite_query($conexion,$consulta);

while($fila = sqlite_fetch_array($resultado)){

echo "<tr><td>".$fila['utc']."</td><td>".$fila['nombrecategoria']."</td><td>".$fila['enlace']."</td><td>".$fila['coneccion']."</td><tr>";



}

echo "</table>";

sqlite_close($conexion);



$conexion = sqlite_open('basedato/chatear.db');


//Abrimos una tabla
echo "<h5> favoritos... </h5>";
echo "<table border=1><tr><td>utc</td><td>usuario</td><td>producto</td><td>descripcion</td><td>borar</td></tr>";



$consulta = "SELECT * FROM favoritos;";






$resultado = sqlite_query($conexion,$consulta);

while($fila = sqlite_fetch_array($resultado)){

echo "<tr><td>".$fila['utc']."</td><td>".$fila['usuario']."</td><td>".$fila['productofavorito']."</td><td>".$fila['descripcion']."</td><tr>";



}

echo "</table>";

sqlite_close($conexion);

?></body>
</html>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>INTECK</title>
 
    
<meta http-equiv="REFRESH" content="5;url=jam.php">


<style type="text/css">
<!--

}

/* ~~ Selectores de elemento/etiqueta ~~ */
ul, ol, dl { /* Debido a las diferencias existentes entre los navegadores, es recomendable no añadir relleno ni márgenes en las listas. Para lograr coherencia, puede especificar las cantidades deseadas aquí o en los elementos de lista (LI, DT, DD) que contienen. Recuerde que lo que haga aquí se aplicará en cascada en la lista .nav, a no ser que escriba un selector más específico. */
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 /* la eliminación del margen superior resuelve un problema que origina que los márgenes escapen de la etiqueta div contenedora. El margen inferior restante lo mantendrá separado de los elementos de que le sigan. */
	padding-right: 15px;
	padding-left: 15px; /* la adición de relleno a los lados del elemento dentro de las divs, en lugar de en las divs propiamente dichas, elimina todas las matemáticas de modelo de cuadro. Una div anidada con relleno lateral también puede usarse como método alternativo. */
}
a img { /* este selector elimina el borde azul predeterminado que se muestra en algunos navegadores alrededor de una imagen cuando está rodeada por un vínculo */
	border: none;
}
/* ~~ La aplicación de estilo a los vínculos del sitio debe permanecer en este orden (incluido el grupo de selectores que crea el efecto hover -paso por encima-). ~~ */
a:link {
	color: #42413C;
	text-decoration: underline; /* a no ser que aplique estilos a los vínculos para que tengan un aspecto muy exclusivo, es recomendable proporcionar subrayados para facilitar una identificación visual rápida */
}
a:visited {
	color: #6E6C64;
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* este grupo de selectores proporcionará a un usuario que navegue mediante el teclado la misma experiencia de hover (paso por encima) que experimenta un usuario que emplea un ratón. */
	text-decoration: none;
}

/* ~~ este contenedor de anchura fija rodea a todos los demás elementos ~~ */


/* ~~ Esta es la información de diseño. ~~ 

1) El relleno sólo se sitúa en la parte superior y/o inferior de la div. Los elementos situados dentro de esta div tienen relleno a los lados. Esto le ahorra las "matemáticas de modelo de cuadro". Recuerde que si añade relleno o borde lateral a la div propiamente dicha, éste se añadirá a la anchura que defina para crear la anchura *total*. También puede optar por eliminar el relleno del elemento en la div y colocar una segunda div dentro de ésta sin anchura y el relleno necesario para el diseño deseado.

*/


/* ~~ clases float/clear varias ~~ */
.fltrt {  /* esta clase puede utilizarse para que un elemento flote en la parte derecha de la página. El elemento flotante debe preceder al elemento junto al que debe aparecer en la página. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* esta clase puede utilizarse para que un elemento flote en la parte izquierda de la página. El elemento flotante debe preceder al elemento junto al que debe aparecer en la página. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* esta clase puede situarse en una <br /> o div vacía como elemento final tras la última div flotante (dentro de #container) si se elimina overflow:hidden en .container */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
-->
</style></head>

<body>

<div class="container">
  <div class="content">
    <h1>PANEL DE CONTROL....</h1>
    

<? 






				


$conexion = sqlite_open('basedato/chatear.db');


//Abrimos una tabla
echo "<h5>usuarios  </h5>";
echo "<table border=6><tr><td>utc</td><td>usuarios</td><td>contrseña</td><td>nombre</td><td>email</td><td>fecha  de  nacimiento</td><td>titulo</td></tr>";

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
echo "<table border=6><tr><td>utc</td><td>usuarios</td><td>contrseña</td><td>nombre</td><td>email</td><td>direccion</td><td>telefono</td><td>fecha  de nacimiento</td><td>puesto</td></tr>";

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
echo "<table border=60><tr><td>utc</td><td>año</td><td>mes</td><td>dia</td><td>hora</td><td>minuto</td><td>segundo</td><td>usuario</td><td>nombre</td><td>asunto</td><td>email</td><td>mensaje</td><td>borrar</td></tr>";

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
echo "<table border=1><tr><td>utc</td><td>año</td><td>mes</td><td>dia</td><td>hora</td><td>minuto</td><td>segundo</td><td>usuario</td><td>referencia</td><td>etiqueta</td><td>foto completa</td><td>foto icono</td><td>precio</td><td>comentarios</td><td>cantidad</td><td>impuestos</td><td>descricion</td><td>anexo</td><td>titulo producto</td><td>boton</td><td>imagen1</td><td>imagen2</td><td>imagen3</td><td>imagen4</td><td>imagen5</td><td>imagen6</td><td>imagen7</td><td>imagen8</td><td>imagen9</td><td>imagen10</td></tr>";



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
echo "<table border=1><tr><td>utc</td><td>usuario</td><td>nombre</td><td>apellido</td><td>codigo postal</td><td>direccion</td><td>direccion2</td><td>estado</td><td>pais</td><td>comentario</td><td>identificador</td></tr>";



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
echo "<table border=1><tr><td>utc</td><td>año</td><td>mes</td><td>dia</td><td>hora</td><td>minuto</td><td>segundo</td><td>usuario</td><td>nombre</td><td>apellido</td><td>id.fiscal</td><td>codigo postal</td><td>direccion</td><td>direccion2</td><td>estado</td><td>pais</td><td>comentario</td><td>identificador</td></tr>";



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
echo "<table border=1><tr><td>utc</td><td>año</td><td>mes</td><td>dia</td><td>hora</td><td>minuto</td><td>segundo</td><td>usuario</td><td>texto</td></tr>";



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
echo "<table border=1><tr><td>utc</td><td>año</td><td>mes</td><td>dia</td><td>hora</td><td>minuto</td><td>segundo</td><td>usuario</td><td>texto</td></tr>";



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
echo "<table border=1><tr><td>utc</td><td>año</td><td>mes</td><td>dia</td><td>hora</td><td>minuto</td><td>segundo</td><td>usuario</td><td>encabezado</td><td>texto</td></tr>";



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
echo "<table border=1><tr><td>utc</td><td>año</td><td>mes</td><td>dia</td><td>hora</td><td>minuto</td><td>segundo</td><td>usuario</td><td>texto</td><td>titulo</td></tr>";



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
echo "<table border=1><tr><td>utc</td><td>año</td><td>mes</td><td>dia</td><td>hora</td><td>minuto</td><td>segundo</td><td>usuario</td><td>texto</td><td>titulo</td></tr>";



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
echo "<table border=1><tr><td>utc</td><td>año</td><td>mes</td><td>dia</td><td>hora</td><td>minuto</td><td>segundo</td><td>usuario</td><td>titulo</td><td>numero del pedido</td><td>texto</td><td>imagen</td><td>archivo</td></tr>";



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
echo "<table border=1><tr><td>utc</td><td>año</td><td>mes</td><td>dia</td><td>hora</td><td>minuto</td><td>segundo</td><td>usuario</td><td>tiempo</td><td>descripcion</td><td>precio</td><td>imagen</td></tr>";



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
echo "<table border=1><tr><td>utc</td><td>año</td><td>mes</td><td>dia</td><td>hora</td><td>minuto</td><td>segundo</td><td>usuario</td><td>texto</td></tr>";



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
echo "<table border=1><tr><td>utc</td><td>año</td><td>mes</td><td>dia</td><td>hora</td><td>minuto</td><td>segundo</td><td>usuario</td><td>texto</td></tr>";



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
echo "<table border=1><tr><td>utc</td><td>nombre  de la categoria</td><td>enlace</td><td>coneccion</td></tr>";



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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>Pimp your tables with CSS3</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Pimp your tables with CSS3" />
        <meta name="keywords" content="table, css3, style, beautiful, fancy, css"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
    </head>
    <style>
        *{
            margin:0;
            padding:0;
        }
        body{
            font-family: Georgia, serif;
            font-size: 20px;
            font-style: italic;
            font-weight: normal;
            letter-spacing: normal;
            background: #f0f0f0;
        }
        #content{
            background-color:#fff;
            width:750px;
            padding:40px;
            margin:0 auto;
            border-left:30px solid #1D81B6;
            border-right:1px solid #ddd;
            -moz-box-shadow:0px 0px 16px #aaa;
        }
        .head{
            font-family:Helvetica,Arial,Verdana;
            text-transform:uppercase;
            font-weight:bold;
            font-size:12px;
            font-style:normal;
            letter-spacing:3px;
            color:#888;
            border-bottom:3px solid #f0f0f0;
            padding-bottom:10px;
            margin-bottom:10px;
        }
        .head a{
            color:#1D81B6;
            text-decoration:none;
            float:right;
            text-shadow:1px 1px 1px #888;
        }
        .head a:hover{
            color:#f0f0f0;
        }
        #content h1{
            font-family:"Trebuchet MS",sans-serif;
            color:#1D81B6;
            font-weight:normal;
            font-style:normal;
            font-size:56px;
            text-shadow:1px 1px 1px #aaa;
        }
        #content h2{
            font-family:"Trebuchet MS",sans-serif;
            font-size:34px;
            font-style:normal;
            background-color:#f0f0f0;
            margin:40px 0px 30px -40px;
            padding:0px 40px;
            clear:both;
            float:left;
            width:100%;
            color:#aaa;
            text-shadow:1px 1px 1px #fff;
        }

    </style>
    <body>
        <div id="content">
            <a class="back" href=""></a>
            <span class="scroll"></span>
            <p class="head">
                
            <h1>panel de control</h1>
            
            <h2>Tienda inteck</h2>
            
            
            
            <? 






				


$conexion = sqlite_open('../basedato/chatear.db');


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

$conexion = sqlite_open('../basedato/administradores.db');


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

$conexion = sqlite_open('../basedato/chatear.db');


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
$conexion = sqlite_open('../basedato/chatear.db');


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

?>
            
            <table class="table1">
                <thead>
                    <tr>
                        <th></th>
                        <th scope="col" abbr="Starter">Smart Starter</th>
                        <th scope="col" abbr="Medium">Smart Medium</th>
                        <th scope="col" abbr="Business">Smart Business</th>
                        <th scope="col" abbr="Deluxe">Smart Deluxe</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th scope="row">Price per month</th>
                        <td>$ 2.90</td>
                        <td>$ 5.90</td>
                        <td>$ 9.90</td>
                        <td>$ 14.90</td>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <th scope="row">Storage Space</th>
                        <td>512 MB</td>
                        <td>1 GB</td>
                        <td>2 GB</td>
                        <td>4 GB</td>
                    </tr>
                    <tr>
                        <th scope="row">Bandwidth</th>
                        <td>50 GB</td>
                        <td>100 GB</td>
                        <td>150 GB</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <th scope="row">MySQL Databases</th>
                        <td>Unlimited</td>
                        <td>Unlimited</td>
                        <td>Unlimited</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <th scope="row">Setup</th>
                        <td>19.90 $</td>
                        <td>12.90 $</td>
                        <td>free</td>
                        <td>free</td>
                    </tr>
                    <tr>
                        <th scope="row">PHP 5</th>
                        <td><span class="check"></span></td>
                        <td><span class="check"></span></td>
                        <td><span class="check"></span></td>
                        <td><span class="check"></span></td>
                    </tr>
                    <tr>
                        <th scope="row">Ruby on Rails</th>
                        <td><span class="check"></span></td>
                        <td><span class="check"></span></td>
                        <td><span class="check"></span></td>
                        <td><span class="check"></span></td>
                    </tr>
                </tbody>
            </table>

            <h2>Table Style 2</h2>
            <table class="table2">
                <thead>
                    <tr>
                        <th></th>
                        <th scope="col" abbr="Starter">Smart Starter</th>
                        <th scope="col" abbr="Medium">Smart Medium</th>
                        <th scope="col" abbr="Business">Smart Business</th>
                        <th scope="col" abbr="Deluxe">Smart Deluxe</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th scope="row">Price per month</th>
                        <td>$ 2.90</td>
                        <td>$ 5.90</td>
                        <td>$ 9.90</td>
                        <td>$ 14.90</td>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <th scope="row">Storage Space</th>
                        <td>512 MB</td>
                        <td>1 GB</td>
                        <td>2 GB</td>
                        <td>4 GB</td>
                    </tr>
                    <tr>
                        <th scope="row">Bandwidth</th>
                        <td>50 GB</td>
                        <td>100 GB</td>
                        <td>150 GB</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <th scope="row">MySQL Databases</th>
                        <td>Unlimited</td>
                        <td>Unlimited</td>
                        <td>Unlimited</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <th scope="row">Setup</th>
                        <td>19.90 $</td>
                        <td>12.90 $</td>
                        <td>free</td>
                        <td>free</td>
                    </tr>
                    <tr>
                        <th scope="row">PHP 5</th>
                        <td><span class="check"></span></td>
                        <td><span class="check"></span></td>
                        <td><span class="check"></span></td>
                        <td><span class="check"></span></td>
                    </tr>
                    <tr>
                        <th scope="row">Ruby on Rails</th>
                        <td><span class="check"></span></td>
                        <td><span class="check"></span></td>
                        <td><span class="check"></span></td>
                        <td><span class="check"></span></td>
                    </tr>
                </tbody>
            </table>

            <h2>Table Style 3</h2>
            <table class="table3">
                <thead>
                    <tr>
                        <th></th>
                        <th scope="col" abbr="Starter">Smart Starter</th>
                        <th scope="col" abbr="Medium">Smart Medium</th>
                        <th scope="col" abbr="Business">Smart Business</th>
                        <th scope="col" abbr="Deluxe">Smart Deluxe</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th scope="row">Price per month</th>
                        <td>$ 2.90</td>
                        <td>$ 5.90</td>
                        <td>$ 9.90</td>
                        <td>$ 14.90</td>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <th scope="row">Storage Space</th>
                        <td>512 MB</td>
                        <td>1 GB</td>
                        <td>2 GB</td>
                        <td>4 GB</td>
                    </tr>
                    <tr>
                        <th scope="row">Bandwidth</th>
                        <td>50 GB</td>
                        <td>100 GB</td>
                        <td>150 GB</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <th scope="row">MySQL Databases</th>
                        <td>Unlimited</td>
                        <td>Unlimited</td>
                        <td>Unlimited</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <th scope="row">Setup</th>
                        <td>19.90 $</td>
                        <td>12.90 $</td>
                        <td>free</td>
                        <td>free</td>
                    </tr>
                    <tr>
                        <th scope="row">PHP 5</th>
                        <td><span class="check"></span></td>
                        <td><span class="check"></span></td>
                        <td><span class="check"></span></td>
                        <td><span class="check"></span></td>
                    </tr>
                    <tr>
                        <th scope="row">Ruby on Rails</th>
                        <td><span class="check"></span></td>
                        <td><span class="check"></span></td>
                        <td><span class="check"></span></td>
                        <td><span class="check"></span></td>
                    </tr>
                </tbody>
            </table>

        </div>

    </body>
</html>
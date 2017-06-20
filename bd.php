<?
$conexion = sqlite_open('basedato/chatear.db') or die('Ha sido imposible establecer la conexion');
$consulta =
<<<SQL
CREATE TABLE info(
utc Int  auto increment ,
usuario Char(50) Not Null,
contrasena Char(50) Not Null,
nombre Char(5000),
email Char(80),
fechanaci char(40),
titulo char(80)


);

SQL;
//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion);

$conexion = sqlite_open('basedato/chatear.db') or die('Ha sido imposible establecer la conexion');
//peticion

$consulta =

<<<SQL
INSERT INTO info VALUES(000001,'zhibo','zhibobarreras','daniel barreras','sercar delas milpas','sercar delas milpas','info@menu.com');
SQL;

//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion);








$conexion = sqlite_open('basedato/chatear.db') or die('Ha sido imposible establecer la conexion');
$consulta =
<<<SQL
CREATE TABLE contacto(
utc Int  Not Null,
anio Int,
mes Int,
dia Int,
hora Int,
minuto Int,
segundo Int,
usuario Char(500),
nombre Char(500),
asunto Char(5000),
email Char(1000),
mensaje Char(10000)


);

SQL;
//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion);

$conexion = sqlite_open('basedato/chatear.db') or die('Ha sido imposible establecer la conexion');
//peticion

$consulta =

<<<SQL
INSERT INTO contacto VALUES(000001,'zhibo','zhibobarreras','daniel barreras','sercar delas milpas','sercar delas milpas','sercar delas milpas','sercar delas milpas','sercar delas milpas','sercar delas milpas','sercar delas milpas','info@menu.com');
SQL;

//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion);



$conexion = sqlite_open('basedato/chatear.db') or die('Ha sido imposible establecer la conexion');
$consulta =
<<<SQL

CREATE TABLE producto(
utc Int primary key not null,
anio Int,
mes Int,
dia Int,
hora Int,
minuto Int,
segundo Int,
usuario Char(800),
referencia Char(500),
etiqueta Char(200),
botoncarrito Char(2000000000),
categoria Char(2000)not null,
precio Char(200),
comentarios Char(200),
cantidad Char(200),
impuestos Char(2000),
descripcionbreve Char(2000),
descripcion Char(200000),
tituloproducto Char(2000),
anexo char(20000),
boton char(500000000000),
img1 char(5000),
img2 char(5000), 
img3 char(5000),
img4 char(5000),
img5 char(5000),
img6 char(5000),
img7 char(5000),
img8 char(5000),
img9 char(5000),
img10 char(5000)
);

SQL;
//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion);
$conexion = sqlite_open('basedato/chatear.db') or die('Ha sido imposible establecer la conexion');//peticion

$consulta =

<<<SQL
INSERT INTO producto VALUES(00000000,2011,02,10,11,55,00,'zhibo','zhibo','zhibo',' es mi primer texto',' es mi primer texto',' es mi primer texto',' es mi primer texto','imagen',' es mi primer texto',' es mi primer texto',' es mi primer texto',' es mi primer texto',' es mi primer texto',' es mi primer texto',' es mi primer texto',' es mi primer texto',' es mi primer texto',' es mi primer texto',' es mi primer texto',' es mi primer texto',' es mi primer texto',' es mi primer texto',' es mi primer texto','archivo');
SQL;


//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion);





//---------------------------------------------------------------------------------------



$conexion = sqlite_open('basedato/chatear.db') or die('Ha sido imposible establecer la conexion');
$consulta =
<<<SQL

CREATE TABLE factura(
utc Int  Not Null,
anio Int,
mes Int,
dia Int,
hora Int,
minuto Int,
segundo Int,
usuario Char(80),
nombre Char(500),
apellido Char(500),
idfiscal Char(500),
codigopostal Char(500),
direccion Char(500),
direccion2 Char(500),
estado Char(500),
pais Char(500),
comentario Char(500),
identificador Char(200)


);

SQL;
//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion);
$conexion = sqlite_open('basedato/chatear.db') or die('Ha sido imposible establecer la conexion');//peticion

$consulta =

<<<SQL
INSERT INTO factura VALUES(00000000,2011,02,10,11,55,00,'zhibo',' es mi primer texto','imagen','imagen','imagen','imagen','imagen','imagen','imagen','imagen','archivo');
SQL;


//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion);


$conexion = sqlite_open('basedato/chatear.db') or die('Ha sido imposible establecer la conexion');
$consulta =
<<<SQL

CREATE TABLE envio(
utc Int  Not Null,
usuario Char(80),
nombre Char(500),
apellido Char(500),
codigopostal Char(500),
direccion Char(500),
direccion2 Char(500),
estado Char(500),
pais Char(500),
comentario Char(500),
identificador Char(200)


);

SQL;
//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion);



$conexion = sqlite_open('basedato/chatear.db') or die('Ha sido imposible establecer la conexion');//peticion

$consulta =

<<<SQL
INSERT INTO envio VALUES(00000000,'zhibo','zhibo','zhibo','zhibo','zhibo','zhibo','zhibo','zhibo',' es mi primer texto','imagen');
SQL;


//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion);


$conexion = sqlite_open('basedato/chatear.db') or die('Ha sido imposible establecer la conexion');
$consulta =
<<<SQL

CREATE TABLE condicionesuso(
utc Int  Not Null,
anio Int,
mes Int,
dia Int,
hora Int,
minuto Int,
segundo Int,
usuario Char(80),
encabezado Char(500),
texto Char(500)



);

SQL;
//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion);


$conexion = sqlite_open('basedato/chatear.db') or die('Ha sido imposible establecer la conexion');//peticion

$consulta =

<<<SQL
INSERT INTO condicionesuso VALUES(00000000,2011,02,10,11,55,00,'zhibo','zhibo',' es mi primer texto');
SQL;


//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
sqlite_close($conexion);

$conexion = sqlite_open('basedato/chatear.db') or die('Ha sido imposible establecer la conexion');
$consulta =
<<<SQL

CREATE TABLE preguntas(
utc Int  Not Null,
anio Int,
mes Int,
dia Int,
hora Int,
minuto Int,
segundo Int,
usuario Char(80),
texto Char(500)


);

SQL;
//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion);
$conexion = sqlite_open('basedato/chatear.db') or die('Ha sido imposible establecer la conexion');//peticion

$consulta =

<<<SQL
INSERT INTO preguntas VALUES(00000000,2011,02,10,11,55,00,'zhibo',' es mi primer texto');
SQL;


//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion);




$conexion = sqlite_open('basedato/chatear.db') or die('Ha sido imposible establecer la conexion');
$consulta =
<<<SQL

CREATE TABLE comentariosproducto(
utcp Int  Not Null,
aniop Int,
mesp Int,
diap Int,
horap Int,
minutop Int,
segundop Int,
usuariop Char(80),
textop Char(500)


);

SQL;
//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion);
$conexion = $conexion = sqlite_open('basedato/chatear.db') or die('Ha sido imposible establecer la conexion');//peticion

$consulta =

<<<SQL
INSERT INTO comentariosproducto VALUES(00000000,2011,02,10,11,55,00,'zhibo',' es mi primer texto');
SQL;


//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion);


$conexion = sqlite_open('basedato/chatear.db') or die('Ha sido imposible establecer la conexion');
$consulta =
<<<SQL

CREATE TABLE subpreguntas(
utc Int  Not Null,
anio Int,
mes Int,
dia Int,
hora Int,
minuto Int,
segundo Int,
usuario Char(80),
texto Char(500)


);

SQL;
//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion);
$conexion = sqlite_open('basedato/chatear.db') or die('Ha sido imposible establecer la conexion');//peticion

$consulta =

<<<SQL
INSERT INTO subpreguntas VALUES(00000000,2011,02,10,11,55,00,'zhibo',' es mi primer texto');
SQL;


//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion);



$conexion = sqlite_open('basedato/chatear.db') or die('Ha sido imposible establecer la conexion');
$consulta =
<<<SQL

CREATE TABLE sobre(
utc Int  Not Null,
anio Int,
mes Int,
dia Int,
hora Int,
minuto Int,
segundo Int,
usuario Char(80),
texto Char(500),
titulo Char(200)


);

SQL;
//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion);
$conexion = sqlite_open('basedato/chatear.db') or die('Ha sido imposible establecer la conexion');//peticion

$consulta =

<<<SQL
INSERT INTO sobre VALUES(00000000,2011,02,10,11,55,00,'zhibo','zhibo',' es mi primer texto');
SQL;


//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion);


$conexion = sqlite_open('basedato/chatear.db') or die('Ha sido imposible establecer la conexion');
$consulta =
<<<SQL

CREATE TABLE entrega(
utc Int  Not Null,
anio Int,
mes Int,
dia Int,
hora Int,
minuto Int,
segundo Int,
usuario Char(80),
texto Char(500),

titulo Char(500)



);

SQL;
//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion);
$conexion = sqlite_open('basedato/chatear.db') or die('Ha sido imposible establecer la conexion');//peticion

$consulta =

<<<SQL
INSERT INTO entrega VALUES(00000000,2011,02,10,11,55,00,'zhibo',' es mi primer texto','imagen');
SQL;


//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion);




$conexion = sqlite_open('basedato/chatear.db') or die('Ha sido imposible establecer la conexion');
$consulta =
<<<SQL

CREATE TABLE ticket(
utc Int  Not Null,
anio Int,
mes Int,
dia Int,
hora Int,
minuto Int,
segundo Int,
usuario Char(80),
titulo Char(500),
numeropedido Char(500),
texto Char(500),
imagen Char(400),
archivo Char(400)


);

SQL;
//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion);
$conexion = sqlite_open('basedato/chatear.db') or die('Ha sido imposible establecer la conexion');//peticion

$consulta =

<<<SQL
INSERT INTO ticket VALUES(00000000,2011,02,10,11,55,00,'zhibo',' es mi primer texto','imagen','imagen','imagen','archivo');
SQL;


//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion);




$conexion = sqlite_open('basedato/chatear.db') or die('Ha sido imposible establecer la conexion');
$consulta =
<<<SQL

CREATE TABLE transporte(
utc Int  Not Null,
anio Int,
mes Int,
dia Int,
hora Int,
minuto Int,
segundo Int,
usuario Char(80),
tiempo Char(900),
descripcion Char(900),
precio Char(20),
imagen Char(200)


);

SQL;
//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion);
$conexion = sqlite_open('basedato/chatear.db') or die('Ha sido imposible establecer la conexion');//peticion

$consulta =

<<<SQL
INSERT INTO transporte VALUES(00000000,2011,02,10,11,55,00,'zhibo',' es mi primer texto','ola ola','100','image');
SQL;


//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion);









$conexion = sqlite_open('basedato/chatear.db') or die('Ha sido imposible establecer la conexion');
$consulta =
<<<SQL

CREATE TABLE chat(
utc Int auto increment Not Null,
anio Int,
mes Int,
dia Int,
hora Int,
minuto Int,
segundo Int,
usuario Char(80),
texto Char(500)


);

SQL;
//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion);
$conexion = sqlite_open('basedato/chatear.db') or die('Ha sido imposible establecer la conexion');//peticion

$consulta =

<<<SQL
INSERT INTO chat VALUES(00000000,2011,02,10,11,55,00,'zhibo',' es mi primer texto');
SQL;


//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion);


$conexion = sqlite_open('basedato/chatear.db') or die('Ha sido imposible establecer la conexion');
$consulta =
<<<SQL

CREATE TABLE subchat(
utc Int auto increment Not Null,
anio Int,
mes Int,
dia Int,
hora Int,
minuto Int,
segundo Int,
usuario Char(80),
texto Char(500)


);

SQL;
//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion);
$conexion = sqlite_open('basedato/chatear.db') or die('Ha sido imposible establecer la conexion');//peticion

$consulta =

<<<SQL
INSERT INTO subchat VALUES(00000000,2011,02,10,11,55,00,'zhibo',' es mi primer texto');
SQL;


//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion);



$conexion = sqlite_open('basedato/chatear.db') or die('Ha sido imposible establecer la conexion');
$consulta =
<<<SQL

CREATE TABLE categorias(
utc Int auto increment Not Null,
usuario Char(80),
nombrecategoria Char(800),
enlace Char(800),
coneccion Char(500)


);

SQL;
//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion);
$conexion = sqlite_open('basedato/chatear.db') or die('Ha sido imposible establecer la conexion');//peticion

$consulta =

<<<SQL
INSERT INTO categorias VALUES(00000000,'zhibo','zhibo','zhibo',' es mi primer texto');
SQL;


//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion);

$conexion = sqlite_open('basedato/chatear.db') or die('Ha sido imposible establecer la conexion');
$consulta =
<<<SQL

CREATE TABLE favoritos(
utc Int  Not Null,
usuario Char(800),
productofavorito Char(8000),

descripcion char(3000)


);

SQL;
//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion);
$conexion = sqlite_open('basedato/chatear.db') or die('Ha sido imposible establecer la conexion');//peticion

$consulta =

<<<SQL
INSERT INTO favoritos VALUES(00000000,'zhibo','zhibo','zhibo');
SQL;


//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion);

?>


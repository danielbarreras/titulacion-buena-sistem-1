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
    <h1>usuarios</h1>
    
    
    

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

?></body>
</html>
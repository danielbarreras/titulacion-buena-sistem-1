

<!DOCTYPE HTML>
<html>


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<Link rel=stylesheet href="css/fotos.css" type="text/css" media="all"/>
    <link href='menudenegocios.com.JPG' rel='shortcut icon' type='image/jpeg'> 
    


<title>INTECK </title>
</head>



<body> 










<div id="contenedor">

<?  
 include "veriimg7admin.php"; 
 echo "<H1>CAMBIAR FOTO</H1>";
if($_SESSION['logiaradmin'] == "yes"){echo '
<form action="actuaimg7.php" method="post">
<input type="file" name="file8" id="file"><input type="submit" value="Enviar">
			
				
				
				</form>';

				}

				else {}

 ?>

			            














<footer>  
<h1>DANIEL OMAR BARRERAS MORALES(ZHIBOWEB).2013 </h1>

</footer>
</div>

</body>
</html>

<?
session_start();
if(!isset($_GET['u'])){}else{$_SESSION['logiarusuadmin'] = $_GET['u'];}
 

include "variablessesionadmin.php"; 



if(isset($_SESSION['logiaradmin'])){}else{$_SESSION['logiaradmin'] = "no";}

?>

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
 include "veriimg4admin.php";
 
 echo "<H1>CAMBIAR FOTO</H1>";
if($_SESSION['logiaradmin'] == "yes"){echo '
<form action="actuaimg4.php" method="post">
<input type="file" name="file5" id="file"><input type="submit" value="Enviar">
			
				
				
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

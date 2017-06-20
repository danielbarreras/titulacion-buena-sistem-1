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




 include "veriimg1.php"; ?>

		          














<footer>  
<h1>DANIEL OMAR BARRERAS MORALES(ZHIBOWEB).2013 </h1>

</footer>
</div>

</body>
</html>

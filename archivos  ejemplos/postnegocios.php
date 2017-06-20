<?
session_start();
if(!isset($_GET['u'])){}else{$_SESSION['logiarusu'] = $_GET['u'];}
 

include "variablessesion.php"; 

if(isset($_GET['fromregistro'])){
$fromregistro = $_GET['fromregistro'];

}else{
$fromregistro = "no";
}



if(isset($_GET['verchat'])){
$verchat = $_GET['verchat'];

}else{
$verchat = "no";
}



if(isset($_SESSION['logiar'])){}else{$_SESSION['logiar'] = "no";}

?>


<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<Link rel=stylesheet href="css/estilo.css" type="text/css" media="all"/>
     <link href='menudenegocios.com.png' rel='shortcut icon' type='image/png'>
<title>MENU  DE  NEGOCIOS</title>
</head>



<body>
<div id="contenedor">

<header>



<div id="logo"></div>





 

<nav>
 
                    
                  
                    
					<ul>
						<li><a href="index.php">atras</a></li>
				
						
					</ul>
                      <ul>
                    
						
				<li><a href="postnegocios1.php">negocios</a></li>
						
					</ul>
                    
<ul>
						
				
						<li><a href="index.php"><? echo $_SESSION['usuario']   ?></a></li>
					</ul>
				
				</nav> 
              

<?php


 
				if($_SESSION['logiar'] == "yes"){

				}

				else {echo '
<form action="logiar.php" method="post">
			<input type="text" name="usuario" placeholder="usuario"></br>
				<input type="text" name="contrasena" placeholder="contraseña">
				<input type="submit"></form>';}
					?>
</header>






<? if($fromregistro == "no"){}else{include "fromregistro.php";}?>





<?  
 include "impnego.php"; ?>
 
<? if($_SESSION['logiar'] == "yes"){
 //include "verchat.php";
 
echo'  <form action="innego.php" method="post">
<br>

<textarea rows="10" cols="50" name="texto1" wrap="hard">

</textarea>
				<input type="submit" value="Enviar">
                </form>';
				}
				else {}



					?>
                    <? //include "verificacionchat.php";  ?>
  
    
    
    






<br>

<br>

<br>

<br>

<br>

<br>

<br>



<footer>  
<h3>DANIEL OMAR BARRERAS MORALES(ZHIBOWEB).2012 </h3>

<h3>MENUDENEGOCIOS.COM<BR>
HUATABAMPO SONORA</h3>
</footer>
</div>

</body>
</html>

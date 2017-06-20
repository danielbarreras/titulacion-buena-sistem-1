<?
session_start();
 



if(isset($_GET['fromregistro'])){
$fromregistro = $_GET['fromregistro'];

}else{
$fromregistro = "no";
}







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
                    
						
				<li><a href="venta.php">promocione</a></li>
						
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

<aside><nav><ul>
						<li><?php
 
				if($_SESSION['logiar'] == "yes"){
echo "<a href='deslogiar.php'>cerrar sesion</a>";
				}

				
					?></li>
				
						
					</ul>
                    
					
                    	<ul>
						<li><a href="empleo.php"><br>empleo</a></li>
				
						
					</ul>
                    	<ul>
						<li><a href="postnegocios.php"><br>negocios</a></li>
				
						
					</ul>
                    	<ul>
						<li><a href="venta.php"><br>promocione</a></li>
				
						
                        
					</ul>
                    	
                    	
                    	
                    	
                    

				
                    <ul>
						<li><a href="fromregistro.php"><br>regitrar</a></li>
				
						
					</ul>
                   
				</nav></aside>





<? if($fromregistro == "no"){}else{include "fromregistro.php";}?>





 <?  //CODIGO PARA  CHAT
  include "impven.php";?>
 
<? if($_SESSION['logiar'] == "yes"){
 //include "verchat.php";
 
 echo' <form action="inventa.php" method="post">
<br>

<textarea rows="10" cols="50" name="texto2" wrap="hard">

</textarea>
				<input type="submit" value="Enviar">
                </form>';
				}
				else {}



					?>
                    <? //include "verificacionchat.php";  ?>
  
    
    
    



<section>.</section>




<footer>  
<h3>DANIEL OMAR BARRERAS MORALES(ZHIBOWEB).2012 </h3>

<h3>MENUDENEGOCIOS.COM<BR>
HUATABAMPO SONORA,COL LAZARO CARDENAS CALLE ALDAMA </h3>


</footer>
</div>

</body>
</html>

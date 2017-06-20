<?
session_start();






?>


<!DOCTYPE HTML>
<html>


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<Link rel=stylesheet href="css/estilo1.css" type="text/css" media="all"/>
    <link href='menudenegocios.com.JPG' rel='shortcut icon' type='image/jpeg'> 
    


<title>INTECK </title>
</head>



<body> 
<div id="contenedor">
<header>

<a href=index.php><div id="logo"></div></a>



				


<nav>
 
          <ul>
						<li><?php
 
				if($_SESSION['logiar'] == "yes"){
echo "<a href='deslogiar.php'>cerrar sesion</a>";
				}

				
					?></li>
				
						
					</ul>
                              
                  
                    
					<ul>
						<li><a href="index.php">atras</a></li>
				
						
					</ul>
                      <ul>
						<li><a href="preguntas.php"><br>preguntas</a></li>
				
						
					</ul>
                    	<ul>
						<li><a href="entrega.php"><br>entrega</a></li>
				
						
					</ul>
                    	<ul>
						<li><a href="contacto.php"><br>contacto</a></li>
				
						
                        
					</ul>
                    	
                    	 	<ul>
						<li><a href="sobre.php"><br>sobre  nosotros</a></li>
				
						
                        
					</ul>
                    	
                    	<ul>
						<li><a href="condiciones.php"><br>condiciones  de uso</a></li>
				
						
                        
					</ul>
                    

				
                    
<ul>
						
				
						<li><a href="index.php"><? echo $_SESSION['usuario']   ?></a></li>
					</ul>
				
				</nav>
</header>



<header>
<h1>HOLA <? echo $_SESSION['usuario']   ?></h1>
<?php




 
				if($_SESSION['logiar'] == "yes"){

				}

				else {echo '
<form action="logiar.php" method="post">
<input type="submit"> 
<input type="text" name="usuario" placeholder="usuario">
<input type="text" name="contrasena" placeholder="contraseña">
			
				
				
				</form>';}
					?> 


<span itemprop="photo"><div id="" style="background:url('photo/<?php echo $_SESSION['foto'] ?>.jpg');"></div></span>
 
         
          
 <h4><?  "mi ip es: " . $_SERVER['REMOTE_ADDR'] . "<br />";

		?></h4>

               
</header>

<aside id="la"><h1>CATEGORIAS</h1>  <div id="bloque">

    
<?  

 include "imprimircategorias.php"; echo"<br><br>";

  
  ?>

    <br>
		</div><br><br><br></aside>











<h1>PRODUCTOS</h1>
<?  
 include "veriprod.php"; ?>


                   

<br><br><br>












<footer>  

<h3>DANIEL OMAR BARRERAS MORALES(ZHIBOWEB).2013 </h3>

</footer>

</div>
</body>
</html>
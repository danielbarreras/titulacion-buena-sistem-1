<?
session_start();
if(!isset($_GET['u'])){}else{$_SESSION['logiarusu'] = $_GET['u'];}
 

include "variablessesion.php"; 






if(isset($_SESSION['logiar'])){}else{$_SESSION['logiar'] = "no";}

?>


<!DOCTYPE HTML>
<html>


<head>
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<Link rel=stylesheet href="css/estilo.css" type="text/css" media="all"/>
    <link href='inteck.JPG' rel='shortcut icon' type='image/jpeg'> 
    
	 
        
        <!-- Including the Lobster font from Google's Font Directory -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster" />

   
    


<title>INTECK </title>
</head>



<body> 
<div id="contenedor">
<header>


<a href=index.php><div id="logo"></div></a>



<form action="enlaceproducbusqueda.php" method="get">
  <input type="submit" value="buscar">
  <input type="text" x-webkit-speech id="vocal" name="tituloproducto" onwebkitspeechchange="reconocimientovocal()">
  
  </form></br></br>
		  <?	if($_SESSION['logiar'] == "yes"){echo "<h3>";
		  
		  echo "hola <br>";
	
echo $_SESSION['usuario'] ;
echo "<br><a href='deslogiar.php'>cerrar sesion</a>";
echo "</h3>";
				}

				else {echo '
<form action="logiar.php" method="post">
<input type="submit">
<input type="text" name="contrasena" placeholder="contraseña">
<input type="text" name="usuario" placeholder="usuario">

	 		
				
				
				</form>';}
					?> 		
			
</header>

</br>

<header class="header">






<nav>
                    
					
                    	<ul>
						<li><a href="preguntas.php">preguntas</a></li>
				
						
					</ul>
                    	<ul>
						<li><a href="entrega.php">entrega</a></li>
				
						
					</ul>
                    	<ul>
						<li><a href="contacto.php">contacto</a></li>
				
						
                        
					</ul>
                    	
                    	 	<ul>
						<li><a href="sobre.php">sobre  nosotros</a></li>
				
						
                        
					</ul>
                    	
                    	<ul>
						<li><a href="condiciones.php">condiciones  de uso</a></li>
				
						
                        
					</ul>
                    

				
                    <ul>
						<li><a href="fromregistro.php">regitrar</a></li>
				
						
					</ul>
                  
						
				
						
					
				</nav>







 
			


<span itemprop="photo"><div id="" style="background:url('photo/<?php echo $_SESSION['foto'] ?>.jpg');"></div></span>
 
         
          
 <h4><?  "mi ip es: " . $_SERVER['REMOTE_ADDR'] . "<br />";

		?></h4>

               
</header><h1>ENTREGA</h1>
<?  

 include "slide.php";

  
  ?>
<br>
  <aside id="la">
<?  
			if($_SESSION['logiar'] == "yes"){
echo"<h1>FAVORITOS</h1>";
				

 include "imprimirfavoritos.php";
}
  
  ?>

	<h1>CATEGORIAS</h1>  
    
<?  

 include "imprimircategorias.php";

  
  ?>
     
<h1>ETIQUETAS</h1> 
			
            <?  
 include "imprimiretiquetas.php"; ?>
 <br><br><br>
       
            
				</aside>





	
	


	

    

	

<section>
	 <?  //CODIGO PARA  CHAT
  include "imprimirentrega.php";?>
 



<? if($_SESSION['logiar'] == "yes"){



				}
				else {}


					?>
                    </section>
         
             





<br><br>


<aside id="selec">



<?  
 include "imprimirinteres.php"; ?>
 
 </aside>

<footer>  
<h5>DANIEL OMAR BARRERAS MORALES.2013 </h5>

				
			
		
                  <P>INFORMACION </P>

<header class="header">






<nav>
                    
					
                    	<ul>
						<li><a href="preguntas.php">preguntas</a></li>
				
						
					</ul>
                    	<ul>
						<li><a href="entrega.php">entrega</a></li>
				
						
					</ul>
                    	<ul>
						<li><a href="contacto.php">contacto</a></li>
				
						
                        
					</ul>
                    	
                    	 	<ul>
						<li><a href="sobre.php">sobre  nosotros</a></li>
				
						
                        
					</ul>
                    	
                    	<ul>
						<li><a href="condiciones.php">condiciones  de uso</a></li>
				
						
                        
					</ul>
                    

				
                    <ul>
						<li><a href="fromregistro.php">regitrar</a></li>
				
						
					</ul>
                  
						
				
						
					
				</nav>







 
			


<span itemprop="photo"><div id="" style="background:url('photo/<?php echo $_SESSION['foto'] ?>.jpg');"></div></span>
 
         
          
 <h4><?  "mi ip es: " . $_SERVER['REMOTE_ADDR'] . "<br />";

		?></h4>

               
</header>

<br>

<header class="header">






<nav>
<?  

 include "imprimircategorias.php";

  
  ?>
                    
					
                    	
</nav>







 
			




		

               
</header>



<br>



			               <img src="https://www.paypalobjects.com/en_US/i/bnr/horizontal_solution_PP.gif" alt="" width="200" height="90" />
				
						
					
			
                
 
                
</footer>

</div>
</body>
</html>







  
    
    
    



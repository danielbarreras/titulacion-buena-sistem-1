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
<Link rel=stylesheet href="css/estiloadmin.css" type="text/css" media="all"/>
    <link href='inteck.JPG' rel='shortcut icon' type='image/jpeg'> 
    


<title>INTECK </title>
</head>



<body> <? if($_SESSION['logiaradmin'] == "yes"){
echo "<a href='jami.php'><h6>BASES  DE DATOS</h6></a></li>";
				}?>   

<div id="contenedor">




<header>


<a href=indexadministrador.php><div id="logo"></div></a>




		  <?	if($_SESSION['logiaradmin'] == "yes"){echo "<h3>";
		  
		  echo "hola <br>";
	
echo $_SESSION['usuarioadmin'] ;
echo "<br><a href='deslogiaradmin.php'>cerrar sesion</a>";
echo "</h3>";
				}

				else {echo '
<form action="logiaradministrador.php" method="post">
<input type="submit">
<input type="text" name="contrasenaadmin" placeholder="contraseña">
<input type="text" name="usuarioadmin" placeholder="usuario">

	 		
				
				
				</form>';}
					?> 		
							
</header>

</br>




<header class="header">



<nav>
                    
					
                    	<ul>
						<li><a href="preguntasadministrador.php">preguntas</a></li>
				
						
					</ul>
                    	<ul>
						<li><a href="entregaadministrador.php">entrega</a></li>
				
						
					</ul>
                    	<ul>
						<li><a href="contactoadmin.php">contacto</a></li>
				
						
                        
					</ul>
                    	
                    	 	<ul>
						<li><a href="sobreadministrador.php">sobre  nosotros</a></li>
				
						
                        
					</ul>
                    	
                    	<ul>
						<li><a href="condicionesadministrador.php">condiciones  de uso</a></li>
				
						
                        
					</ul>
                    

				
                    <ul>
						<li><a href="fromregistroadministrador.php">regitrar admin</a></li>
				
						
					</ul>
                  
						
				
						
					
				</nav>




               
					
                    	
			



				
			
</header>

<h1>CONDICIONES DE  USO</h1>

<aside id="la"><h1>CATEGORIAS</h1>  
<? if($_SESSION['logiaradmin'] == "yes"){
include "imprimircategoriasadmin.php";}?>
<? if($_SESSION['logiaradmin'] == "yes"){
 

   include "fromcategorias.php";
  

				}
				else {}


					?>

			<br>
		<br><br></aside>





<aside id="la"><h1>ETIQUETAS</h1> 
			
            <?  
 include "imprimiretiquetas.php"; ?>
 <h1>USUARIOS</h1> 
               <?  if($_SESSION['logiaradmin'] == "yes"){
 include "imprimirusuarios.php";} ?><br><br>
 <a href='jamiusuario.php'>usuarios></a>
				</aside>
                
                



  <?  //CODIGO PARA  CHAT
  include "imprimircondicionesusoadministrador.php";?>
 <section>
<? if($_SESSION['logiaradmin'] == "yes"){
 //include "verchat.php";
 
 echo' <form action="prosesarcondicionesuso.php" method="post">
 
<br>
<input type="text" name="encabezado"  size=30  placeholder="encabezado">
<textarea rows="10" cols="50" name="texto" wrap="hard">

</textarea>
				<input type="submit" value="Enviar">
                </form>';
				}
				else {}



					?>


<br><br><br>












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
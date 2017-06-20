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
    <link href='inteck.JPG' rel='shortcut icon' type='image/jpeg'> 
    


<title>INTECK </title>
</head>



<body> 
<div id="contenedor">
<header>


<a href=indexadministrador.php><div id="logo"></div></a>




<nav><ul>
						<li><?php
 
				if($_SESSION['logiaradmin'] == "yes"){
echo "<a href='deslogiar.php'>cerrar sesion</a>";
				}

				
					?></li>
				
						
					</ul>
                    
					
                    	<ul>
						<li><a href="preguntasadministrador.php"><br>preguntas</a></li>
				
						
					</ul>
                    	<ul>
						<li><a href="entregaadministrador.php"><br>entrega</a></li>
				
						
					</ul>
                    	<ul>
						<li><a href="contactoadmin.php"><br>contacto</a></li>
				
						
                        
					</ul>
                    	
                    	 	<ul>
						<li><a href="sobreadministrador.php"><br>sobre  nosotros</a></li>
				
						
                        
					</ul>
                    	
                    	<ul>
						<li><a href="condicionesadministrador.php"><br>condiciones  de uso</a></li>
				
						
                        
					</ul>
                    

				
                    <ul>
						<li><a href="fromregistroadministrador.php"><br>regitraradministrador</a></li>
				
						
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
			<div id="lala" >
            
				<h1>COMPUTACION</h1><br><br>
                <a href=venta.php><h1>quemadores</h1></a>

		
			</div>
			<div id="lala" >
			<h1>CONSUMIBLES ELECTRONICOS</h1><br><br>
				
			</div>
			<div id="lala" >
			<h1>ACCESORIOS</h1><br><br>
				
			</div>
			<div id="lala">
			<h1>CONTACTO</h1><br><br>
				
			</div><br>
		</div><br><br></aside>





<aside id="la1"><h1>CATEGORIAS</h1> <div id="bloque">
			<div id="lala" >
            
				<h1>COMPUTACION</h1><br><br>
                <a href=venta.php><h1>quemadores</h1></a>

		
			</div>
			<div id="lala" >
			<h1>CONSUMIBLES ELECTRONICOS</h1><br><br>
				
			</div>
			<div id="lala" >
			<h1>ACCESORIOS</h1><br><br>
				
			</div>
			<div id="lala">
			<h1>CONTACTO</h1><br><br>
							</div><br>
		</div><br><br></aside>



<section>
 

<?  
 include "imprimirproducto.php"; ?>

<? if($_SESSION['logiar'] == "yes"){
 include "formproducto.php";
   include "actualizar1.php";
  

				}
				else {}


					?>
                    </section>
                 
<br><br><br>












<footer>  
<h3>DANIEL OMAR BARRERAS MORALES(ZHIBOWEB).2012 </h3>

</footer>

</div>
</body>
</html>
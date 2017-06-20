
           <?php

$titulo = $_GET['titulomod'];
$descripcion = $_GET['descripcionmod'];
$precio = $_GET['preciomod'];
$utcmod = $_GET['utc'];

?>


<div>
<h1>INGRESAR PRODUCTO</h1>
 <form action="prosesarproducto.php" method="post" enctype="multipart/form-data">
 <h3> Categoria:<select  name="categoria" >
 <?  
 include "imprimircategoriasselec.php"; ?>
					
					
				</select></h3>

<input type="file" name="file2" id="file"><br>
<input type="file" name="file3" id="file"><br>
<input type="file" name="file4" id="file"><br>
<input type="file" name="file5" id="file"><br>
<input type="file" name="file6" id="file"><br>
<input type="file" name="file7" id="file"><br>
<input type="file" name="file8" id="file"><br>
<input type="file" name="file9" id="file"><br>
<input type="file" name="file10" id="file"><br>
<input type="file" name="file11" id="file"><br><br><br>
<input type="text" name="tituloproducto"  size=60 placeholder="titulo"><br><br><br><br>
<input type="text" name="referencia"  size=30 placeholder="referencia"><br><br><br><br>
<input type="text" name="etiqueta"  size=30 placeholder="etiqueta"><br><br><br><br>
<input type="text" name="cantidad"  size=30 placeholder="cantidad"><br><br><br><br>
<input type="text" name="impuestos"  size=30 placeholder="impuestos"><br><br>
<input type="text" name="identificador"  size=60 placeholder="identificador">

<textarea name="comentarios"  size=80 style="height:170px; width:290px;" placeholder="comentarios"></textarea>
<textarea name="anexo"  size=80 style="height:170px; width:290px;" placeholder="anexos"></textarea>
<textarea name="descripcionbreve"  size=70 style="height:170px; width:290px;" placeholder="DESCRIPCION BREVE (PAGINA  DE  INICIO)(introducir menos de 2000 caracteres)"></textarea>
<textarea name="descripcion"  size=80 style="height:170px; width:290px;" placeholder="DESCRIPCION (introducir menos de 6000 caracteres)"></textarea>
<textarea name="botoncarrito"  size=80 style="height:170px; width:290px;" placeholder="boton paypal carrito"></textarea>

<textarea name="boton"  size=80 style="height:170px; width:290px;" placeholder="boton paypal compra directa"></textarea>

<input type="text" name="precio"  size=30  placeholder="PRECIO"><br>


				<input type="submit" value="Enviar"><br>
                </form><br /><br /><br /><br /></div>
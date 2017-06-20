
           <?php
$utc = $_GET['utc'];
$titulo = $_GET['titulomod'];
$descripcion = $_GET['descripcionmod'];
$precio = $_GET['preciomod'];

$referencia = $_GET['referenciamod'];
$categoria = $_GET['categoriamod'];
$botoncarrito = $_GET['botoncarritomod'];
$boton = $_GET['botonmod'];
$dbreve = $_GET['dbrevemod'];
$etiqueta = $_GET['etiquetamod'];
$cantidad = $_GET['cantidadmod'];
$identificador = $_GET['identificadormod'];
$impuesto = $_GET['impuestomod'];
$anexo = $_GET['anexomod'];
$comentarios = $_GET['comentariosmod'];

$img1 = $_GET['img1mod'];
$img2 = $_GET['img2mod'];
$img3 = $_GET['img3mod'];
$img4 = $_GET['img4mod'];
$img5 = $_GET['img5'];
$img6 = $_GET['img6'];
$img7 = $_GET['img7'];
$img8 = $_GET['img8'];
$img9 = $_GET['img9'];
$img10 = $_GET['img10'];


?>


<article> <form action="actua.php" method="post" enctype="multipart/form-data">
 <h3> Categoria:<select  name="categoria" value="<?php echo $categoria; ?>" >
 <?  
 include "imprimircategoriasselec.php"; ?>
					
					
				</select></h3>

utc:<input type="text" name="utc"  size=30 value="<?php echo $utc; ?>"><br><br><br>
TITULO:<input type="text" name="tituloproducto"  size=30 value="<?php echo $titulo; ?>"><br><br><br>
REFERENCIA:<input type="text" name="referencia"  size=30  value="<?php echo $referencia; ?>"><br><br><br>
ETIQUETA:<input type="text" name="etiqueta"  size=30  value="<?php echo $etiqueta; ?>"><br><br><br>
CANTIDAD:<input type="text" name="cantidad"  size=30  value="<?php echo $cantidad; ?>"><br /><br><br>
IMPUESTO;<input type="text" name="impuestos"  size=30 value="<?php echo $impuesto; ?>"><br><br><br>
identificador:<input type="text" name="identificador"  size=30 value="<?php echo $identificador; ?>"><br><br><br>

comentarios:<textarea name="comentarios"  size=80 style="height:170px; width:290px;" value=""><?php echo $comentarios; ?></textarea><br><br>
ANEXO:<textarea name="anexo"  size=80 style="height:170px; width:290px;" value=""><?php echo $anexo; ?></textarea>
DESCRIPCION BREVE (PAGINA  DE  INICIO):<textarea name="descripcionbreve"  size=70 style="height:170px; width:290px;" value=""><?php echo $dbreve; ?></textarea>
DESCRIPCION:<textarea name="descripcion"  size=80 style="height:170px; width:290px;" ><?php echo $descripcion; ?></textarea>
BOTON CARRITO:<textarea name="botoncarrito"  size=80 style="height:170px; width:290px;" value="<?php echo $botoncarrito; ?>"><?php echo $botoncarrito; ?></textarea>

BOTON DIRECTO;<textarea name="boton"  size=80 style="height:170px; width:290px;" value=""><?php echo $boton; ?></textarea>

PRECIO:<input type="text" name="precio"  size=30  value="<?php echo $precio; ?>"><br>


				<input type="submit" value="Enviar"><br>
                </form><br /><br /><br /><br /></article>
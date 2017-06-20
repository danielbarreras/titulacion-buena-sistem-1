<?php

session_start();

$usuario1= $_SESSION['usuarioadmin'];


$textoform = $_POST['tituloproducto'];
$dbreve = $_POST['descripcionbreve'];
$texto2form = $_POST['descripcion'];
$precio = $_POST['precio'];
$referencia = $_POST['referencia'];
$etiqueta = $_POST['etiqueta'];
$comentarios = $_POST['comentarios'];

$cantidad = $_POST['cantidad'];
$anexo = $_POST['anexo'];
$impuestos= $_POST['impuestos'];
$boton = $_POST['boton'];
$botoncarrito = $_POST['botoncarrito'];
$categoria = $_POST['categoria'];

$postutc = date('U');
$postanio = date('Y');
$postmes = date('m');
$postdia = date('d');
$posthora = date('H');
$postminuto = date('i');
$postsegundo = date('s');

$img1 = $_FILES["file2"]["name"];
$img2 = $_FILES["file3"]["name"];
$img3 = $_FILES["file4"]["name"];
$img4 = $_FILES["file5"]["name"];
$img5 = $_FILES["file6"]["name"];
$img6 = $_FILES["file7"]["name"];
$img7 = $_FILES["file8"]["name"];
$img8 = $_FILES["file9"]["name"];
$img9 = $_FILES["file10"]["name"];
$img10 = $_FILES["file11"]["name"];


	

//procesado

$conexion = sqlite_open('basedato/chatear.db');

$consulta = 

<<<SQL

INSERT INTO producto VALUES ('$postutc','$postanio','$postmes','$postdia','$posthora','$postminuto','$postsegundo','$usuario1','$referencia','$etiqueta','$botoncarrito','$categoria','$precio','$comentarios','$cantidad','$impuestos','$dbreve','$texto2form','$textoform','$anexo','$boton','$img1','$img2','$img3','$img4','$img5','$img6','$img7','$img8','$img9','$img10')

SQL;

$resultado = sqlite_exec($conexion,$consulta);

sqlite_close($conexion);


  
 
  
  $allowedExts = array("jpg", "jpeg", "gif", "png");
$extension = end(explode(".", $_FILES["file2"]["name"]));
if ((($_FILES["file2"]["type"] == "image/gif")
|| ($_FILES["file2"]["type"] == "image/jpeg")
|| ($_FILES["file2"]["type"] == "image/png")
|| ($_FILES["file2"]["type"] == "image/pjpeg"))
&& ($_FILES["file2"]["size"] < 100000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file2"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file2"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file2"]["name"] . "<br>";
    echo "Type: " . $_FILES["file2"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file2"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file2"]["tmp_name"] . "<br>";

    if (file_exists("upload/" . $_FILES["file2"]["name"]))
      {
      echo $_FILES["file2"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file2"]["tmp_name"],
      "upload/" . $_FILES["file2"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file2"]["name"];
      }
    }
  }
else
  {
  echo "invalido";
  }


$allowedExts = array("jpg", "jpeg", "gif", "png");
$extension = end(explode(".", $_FILES["file3"]["name"]));
if ((($_FILES["file3"]["type"] == "image/gif")
|| ($_FILES["file3"]["type"] == "image/jpeg")
|| ($_FILES["file3"]["type"] == "image/png")
|| ($_FILES["file3"]["type"] == "image/pjpeg"))
&& ($_FILES["file3"]["size"] < 100000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file3"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file3"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file3"]["name"] . "<br>";
    echo "Type: " . $_FILES["file3"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file3"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file3"]["tmp_name"] . "<br>";

    if (file_exists("upload/" . $_FILES["file3"]["name"]))
      {
      echo $_FILES["file3"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file3"]["tmp_name"],
      "upload/" . $_FILES["file3"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file3"]["name"];
      }
    }
  }
else
  {
  echo "invalido";
  }

$allowedExts = array("jpg", "jpeg", "gif", "png");
$extension = end(explode(".", $_FILES["file4"]["name"]));
if ((($_FILES["file4"]["type"] == "image/gif")
|| ($_FILES["file4"]["type"] == "image/jpeg")
|| ($_FILES["file4"]["type"] == "image/png")
|| ($_FILES["file4"]["type"] == "image/pjpeg"))
&& ($_FILES["file4"]["size"] < 100000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file4"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file4"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file4"]["name"] . "<br>";
    echo "Type: " . $_FILES["file4"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file4"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file4"]["tmp_name"] . "<br>";

    if (file_exists("upload/" . $_FILES["file4"]["name"]))
      {
      echo $_FILES["file4"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file4"]["tmp_name"],
      "upload/" . $_FILES["file4"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file4"]["name"];
      }
    }
  }
else
  {
  echo "invalido";
  }
  
  
  
  
  $allowedExts = array("jpg", "jpeg", "gif", "png");
$extension = end(explode(".", $_FILES["file5"]["name"]));
if ((($_FILES["file5"]["type"] == "image/gif")
|| ($_FILES["file5"]["type"] == "image/jpeg")
|| ($_FILES["file5"]["type"] == "image/png")
|| ($_FILES["file5"]["type"] == "image/pjpeg"))
&& ($_FILES["file5"]["size"] < 100000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file5"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file5"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file5"]["name"] . "<br>";
    echo "Type: " . $_FILES["file5"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file5"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file5"]["tmp_name"] . "<br>";

    if (file_exists("upload/" . $_FILES["file5"]["name"]))
      {
      echo $_FILES["file5"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file5"]["tmp_name"],
      "upload/" . $_FILES["file5"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file5"]["name"];
      }
    }
  }
else
  {
  echo "invalido";
  }
  
  
  
  
  
  
  
  $allowedExts = array("jpg", "jpeg", "gif", "png");
$extension = end(explode(".", $_FILES["file6"]["name"]));
if ((($_FILES["file6"]["type"] == "image/gif")
|| ($_FILES["file6"]["type"] == "image/jpeg")
|| ($_FILES["file6"]["type"] == "image/png")
|| ($_FILES["file6"]["type"] == "image/pjpeg"))
&& ($_FILES["file6"]["size"] < 100000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file6"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file6"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file6"]["name"] . "<br>";
    echo "Type: " . $_FILES["file6"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file6"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file6"]["tmp_name"] . "<br>";

    if (file_exists("upload/" . $_FILES["file6"]["name"]))
      {
      echo $_FILES["file6"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file6"]["tmp_name"],
      "upload/" . $_FILES["file6"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file6"]["name"];
      }
    }
  }
else
  {
  echo "invalido";
  }
  
  
  $allowedExts = array("jpg", "jpeg", "gif", "png");
$extension = end(explode(".", $_FILES["file7"]["name"]));
if ((($_FILES["file7"]["type"] == "image/gif")
|| ($_FILES["file7"]["type"] == "image/jpeg")
|| ($_FILES["file7"]["type"] == "image/png")
|| ($_FILES["file7"]["type"] == "image/pjpeg"))
&& ($_FILES["file7"]["size"] < 100000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file7"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file7"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file7"]["name"] . "<br>";
    echo "Type: " . $_FILES["file7"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file7"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file7"]["tmp_name"] . "<br>";

    if (file_exists("upload/" . $_FILES["file7"]["name"]))
      {
      echo $_FILES["file7"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file7"]["tmp_name"],
      "upload/" . $_FILES["file7"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file7"]["name"];
      }
    }
  }
else
  {
  echo "invalido";
  }
  
  
  $allowedExts = array("jpg", "jpeg", "gif", "png");
$extension = end(explode(".", $_FILES["file8"]["name"]));
if ((($_FILES["file8"]["type"] == "image/gif")
|| ($_FILES["file8"]["type"] == "image/jpeg")
|| ($_FILES["file8"]["type"] == "image/png")
|| ($_FILES["file8"]["type"] == "image/pjpeg"))
&& ($_FILES["file8"]["size"] < 100000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file8"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file8"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file8"]["name"] . "<br>";
    echo "Type: " . $_FILES["file8"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file8"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file8"]["tmp_name"] . "<br>";

    if (file_exists("upload/" . $_FILES["file8"]["name"]))
      {
      echo $_FILES["file8"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file8"]["tmp_name"],
      "upload/" . $_FILES["file8"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file8"]["name"];
      }
    }
  }
else
  {
  echo "invalido";
  }
  
  
  
  
  
  $allowedExts = array("jpg", "jpeg", "gif", "png");
$extension = end(explode(".", $_FILES["file9"]["name"]));
if ((($_FILES["file9"]["type"] == "image/gif")
|| ($_FILES["file9"]["type"] == "image/jpeg")
|| ($_FILES["file9"]["type"] == "image/png")
|| ($_FILES["file9"]["type"] == "image/pjpeg"))
&& ($_FILES["file9"]["size"] < 100000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file9"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file9"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file9"]["name"] . "<br>";
    echo "Type: " . $_FILES["file9"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file9"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file9"]["tmp_name"] . "<br>";

    if (file_exists("upload/" . $_FILES["file9"]["name"]))
      {
      echo $_FILES["file9"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file9"]["tmp_name"],
      "upload/" . $_FILES["file9"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file9"]["name"];
      }
    }
  }
else
  {
  echo "invalido";
  }
  
  
  
  
  $allowedExts = array("jpg", "jpeg", "gif", "png");
$extension = end(explode(".", $_FILES["file10"]["name"]));
if ((($_FILES["file10"]["type"] == "image/gif")
|| ($_FILES["file10"]["type"] == "image/jpeg")
|| ($_FILES["file10"]["type"] == "image/png")
|| ($_FILES["file10"]["type"] == "image/pjpeg"))
&& ($_FILES["file10"]["size"] < 100000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file10"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file10"]["name"] . "<br>";
    echo "Type: " . $_FILES["file10"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file10"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file10"]["tmp_name"] . "<br>";

    if (file_exists("upload/" . $_FILES["file10"]["name"]))
      {
      echo $_FILES["file10"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file10"]["tmp_name"],
      "upload/" . $_FILES["file10"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file10"]["name"];
      }
    }
  }
else
  {
  echo "invalido";
  }
  
  
  $allowedExts = array("jpg", "jpeg", "gif", "png");
$extension = end(explode(".", $_FILES["file11"]["name"]));
if ((($_FILES["file11"]["type"] == "image/gif")
|| ($_FILES["file11"]["type"] == "image/jpeg")
|| ($_FILES["file11"]["type"] == "image/png")
|| ($_FILES["file11"]["type"] == "image/pjpeg"))
&& ($_FILES["file11"]["size"] < 100000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file11"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file11"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file11"]["name"] . "<br>";
    echo "Type: " . $_FILES["file11"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file11"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file11"]["tmp_name"] . "<br>";

    if (file_exists("upload/" . $_FILES["file11"]["name"]))
      {
      echo $_FILES["file11"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file11"]["tmp_name"],
      "upload/" . $_FILES["file11"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file11"]["name"];
      }
    }
  }
else
  {
  echo "invalido";
  }
  
  
include "indexc.php";

?>

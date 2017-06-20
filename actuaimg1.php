<?php

session_start();

$utc = $_POST['utc'];




   $allowedExts = array("jpg", "jpeg", "gif", "png");
$extension = end(explode(".", $_FILES["file2"]["name"]));
if ((($_FILES["file2"]["type"] == "image/gif")
|| ($_FILES["file2"]["type"] == "image/jpeg")
|| ($_FILES["file2"]["type"] == "image/png")
|| ($_FILES["file2"]["type"] == "image/pjpeg"))
&& ($_FILES["file2"]["size"] < 10000000)
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
    echo "Size: " . ($_FILES["file2"]["size"] / 10204) . " kB<br>";
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

$img1 = $_FILES["file2"]["name"];



$conexion = sqlite_open('basedato/chatear.db');

$consulta = "UPDATE producto SET img1='".$img1."' WHERE utc='".$utc."'";

$resultado = sqlite_query($conexion,$consulta);

sqlite_close($conexion);
 
  



echo'

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=indexadministrador.php"
	</head>
</html>

';

?>

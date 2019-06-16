<?php
session_start();
if ($_GET){
  $value = $_GET["id"];

  function feria($value){
    $archivo = "./db/ferias.json";
    //para leer y obtener el contenido del archivo
    $json_content = file_get_contents($archivo);
    //para convertir el contenido del archivo en un array
    $array_content = json_decode($json_content,true);

  //  $datos_usuario = "";
    foreach ($array_content["ferias"] as $feria) {
      if ($feria["id"] == $value){
        return $feria;
      }else{
        echo "No se ha encontrado registro de usuario con id ". $value;
      }
    }
  //  return $datos_usuario;
  }
}


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <?php
  include("head.php");
   ?>
</head>
  <body>
    <ul>
    <img src="./img/<?=feria($value)["avatar"]?>">
      <?php foreach (feria($value) as $key => $value):?>
        <li><span><?=$key?>:</span><span><?=$value?></span></li>
      <?php endforeach ?>
    </ul>
  </body>
</html>

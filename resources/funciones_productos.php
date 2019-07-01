<?php

function productos($value){
  $archivo = "./db/productos.json";
  //para leer y obtener el contenido del archivo
  $json_content = file_get_contents($archivo);
  //para convertir el contenido del archivo en un array
  $array_content = json_decode($json_content,true);

  $datos_productos=[];
  foreach ($array_content["productos"] as $producto) {
    if ($producto["categoria"] == $value){
        $datos_productos[] = $producto;
    }
  }
  return $datos_productos;
}

function productos_feria($value){
  $archivo = "./db/productos.json";
  //para leer y obtener el contenido del archivo
  $json_content = file_get_contents($archivo);
  //para convertir el contenido del archivo en un array
  $array_content = json_decode($json_content,true);

  $datos_productos=[];
  foreach ($array_content["productos"] as $producto) {
    if ($producto["fe_id"] == $value){
        $datos_productos[] = $producto;
    }
  }
  return $datos_productos;
}
 ?>

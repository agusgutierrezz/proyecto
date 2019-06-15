<?php

function guardar_feria($nombre, $ubicacion, $descripcion, $categoria, $id, $pic_name, $ext){
  $archivo = "ferias.json";
  $feria = [
      "nombre" => $nombre,
      "ubicacion" => $ubicacion,
      "descripcion" => $descripcion,
      "id" => $id,
      "avatar" => $pic_name,
      "categoria" => $categoria
    ];

  //para leer y obtener el contenido del archivo
  $json_content = file_get_contents($archivo);
  //para convertir el contenido del archivo en un array
  $array_content = json_decode($json_content,true);
  //para pechar al array el nuevo usuario
  array_push($array_content["ferias"], $feria);
  // para convertir el array a json
  $usuarios_json = json_encode($array_content);
  //p guardar/ESCRIBIR usuarios en el archivo "usuarios.json"
  file_put_contents($archivo, $usuarios_json);

}


?>

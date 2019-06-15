<?php

//validacion y guardar usuario
function save_registered_user($nombre, $email, $pass_hash, $id, $pic_name, $ext){
  $archivo = "usuarios.json";
  $usuario = [
      "nombre" => $nombre,
      "email" => $email,
      "pass" => $pass_hash,
      "id" => $id,
      "avatar" => $pic_name
    ];

  //para leer y obtener el contenido del archivo
  $json_content = file_get_contents($archivo);
  //para convertir el contenido del archivo en un array
  $array_content = json_decode($json_content,true);
  //para pechar al array el nuevo usuario
  array_push($array_content["usuarios"], $usuario);
  // para convertir el array a json
  $usuarios_json = json_encode($array_content);
  //p guardar/ESCRIBIR usuarios en el archivo "usuarios.json"
  file_put_contents($archivo, $usuarios_json);

}


 ?>

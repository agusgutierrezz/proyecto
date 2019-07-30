<?php
require_once("pdo.php");
require_once("./resources/funciones_usuarios.php");

function guardar_feria($db, $nombre, $desde, $hasta,  $ubicacion, $descripcion, $id, $pic_name, $ext){
     $fecha_creacion = date("Y-m-d");
     $id_usuario = traerUsuarioLogueado()["us_id"];
     $query = $db->prepare("INSERT into ferias values (default, $id_usuario, :nombre, :desde, :hasta, :ubicacion, :descripcion, '$fecha_creacion', null, null)");


     $query -> bindParam(":nombre",$nombre, PDO::PARAM_STR);
     $query -> bindParam(":desde",$desde, PDO::PARAM_STR);
     $query -> bindParam(":hasta",$hasta, PDO::PARAM_STR);
     $query -> bindParam(":ubicacion",$ubicacion, PDO::PARAM_STR);
     $query -> bindParam(":descripcion", $descripcion, PDO::PARAM_STR);
     $query->execute();

     $query = $db->prepare("INSERT into imagenes values (default, null, (SELECT MAX(fe_id) FROM ferias), '$pic_name', null)");
     $query->execute();
     $miarchivo = dirname(_FILE_);
     $miarchivo = $miarchivo. "/img_user/";
     $miarchivo = $miarchivo. $pic_name;
     move_uploaded_file( $archivo , $miarchivo);
   $query = $db->prepare("SELECT MAX(fe_id) FROM ferias");
   $query->execute();
   $id_feria = $query->fetch(PDO::FETCH_ASSOC);
     header("location: feria.php?id=".$id_feria['MAX(fe_id)']);
}

function actualizar_feria($db, $nombre, $desde, $hasta,  $ubicacion, $descripcion, $fe_id, $pic_name, $ext){

     $query = $db->prepare("UPDATE ferias SET fe_nombre = :nombre, fe_desde = :desde, fe_hasta =:hasta, fe_ubicacion= :ubicacion, fe_descripcion = :descripcion WHERE fe_id = $fe_id");

     $query -> bindParam(":nombre",$nombre, PDO::PARAM_STR);
     $query -> bindParam(":desde",$desde, PDO::PARAM_STR);
     $query -> bindParam(":hasta",$hasta, PDO::PARAM_STR);
     $query -> bindParam(":ubicacion",$ubicacion, PDO::PARAM_STR);
     $query -> bindParam(":descripcion", $descripcion, PDO::PARAM_STR);


     //$query = $db->prepare("INSERT into imagenes values (default, null, (SELECT MAX(fe_id) FROM ferias), '$pic_name', null)");
     $query->execute();
     $miarchivo = dirname(_FILE_);
     $miarchivo = $miarchivo. "/img_user/";
     $miarchivo = $miarchivo. $pic_name;
     move_uploaded_file( $archivo , $miarchivo);
     header("location: feria.php?id=".$fe_id);
}

function feria($value){

      global $db;

       $query = $db->prepare("SELECT * FROM feriate_db.ferias WHERE ferias.fe_id = $value");
       $query->execute();
       $datos_feria = $query->fetch(PDO::FETCH_ASSOC);

     return $datos_feria;
   }


  // $archivo = "./db/ferias.json";
  // //para leer y obtener el contenido del archivo
  // $json_content = file_get_contents($archivo);
  // //para convertir el contenido del archivo en un array
  // $array_content = json_decode($json_content,true);
  //
  // $datos_ferias='';
  // foreach ($array_content["ferias"] as $feria) {
  //   if ($feria["id"] == $value){
  //     $datos_ferias = $feria;
  //   }
  // }
  // return $datos_ferias;


?>

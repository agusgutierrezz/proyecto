<?php
require_once("pdo.php");
require_once("funciones_usuarios.php");

function productos($value){
        global $db;

         $query = $db->prepare("SELECT * FROM categorias
                                INNER JOIN productos ON cat_id = pr_cat_id
                                WHERE cat_nombre = '$value'");
         $query->execute();
         $datos_productos = $query->fetchAll(PDO::FETCH_ASSOC);

     return $datos_productos;

}

function productos_feria($value){
  global $db;

   $query = $db->prepare("SELECT * FROM productos
                          LEFT JOIN imagenes ON
                          img_pr_id = pr_id
                          WHERE pr_fe_id =  '$value'");
   $query->execute();
   $productos = $query->fetchAll(PDO::FETCH_ASSOC);

return $productos;
}

function guardarProductos($nombre, $precio, $cantidad, $descripcion, $id_categoria, $marca, $talle, $estado, $pic_name, $ext, $id_feria){

global $db;
  $fecha_creacion = date("Y-m-d");
  $id_usuario = traerUsuarioLogueado()["us_id"];
  //var_dump('default', $nombre, $precio, $cantidad, $descripcion, 'null', 0, $id_feria, $id_categoria, $id_usuario ); exit;
  $query = $db->prepare("INSERT into productos values (default, :nombre, :precio, :cantidad, :descripcion, null, 0,:talle, :marca, :estado, $id_feria, $id_categoria, $id_usuario)");
  $query -> bindParam(":nombre",$nombre, PDO::PARAM_STR);
  $query -> bindParam(":precio",$precio, PDO::PARAM_INT);
  $query -> bindParam(":cantidad",$cantidad, PDO::PARAM_INT);
  $query -> bindParam(":descripcion",$descripcion, PDO::PARAM_STR);
  $query -> bindParam(":talle",$talle, PDO::PARAM_STR);
  $query -> bindParam(":marca",$marca, PDO::PARAM_STR);
  $query -> bindParam(":estado",$estado, PDO::PARAM_STR);
  $query->execute();
    $query = $db->prepare("INSERT into imagenes values (default, (SELECT MAX(pr_id) FROM productos), null, '$pic_name', null )");
    $query->execute();

    $miarchivo = dirname(_FILE_);
    $miarchivo = $miarchivo. "/img_user/";
    $miarchivo = $miarchivo. $pic_name;
    move_uploaded_file( $archivo , $miarchivo);
}

function actualizarProductos($nombre, $precio, $cantidad, $descripcion, $id_categoria, $marca, $talle, $estado, $pic_name, $ext, $id_feria){

global $db;
  $fecha_creacion = date("Y-m-d");
  $id_usuario = traerUsuarioLogueado()["us_id"];
  //var_dump('default', $nombre, $precio, $cantidad, $descripcion, 'null', 0, $id_feria, $id_categoria, $id_usuario ); exit;
  //$query = $db->prepare("INSERT into productos values (default, :nombre, :precio, :cantidad, :descripcion, null, 0,:talle, :marca, :estado, $id_feria, $id_categoria, $id_usuario)");
  $query -> bindParam(":nombre",$nombre, PDO::PARAM_STR);
  $query -> bindParam(":precio",$precio, PDO::PARAM_INT);
  $query -> bindParam(":cantidad",$cantidad, PDO::PARAM_INT);
  $query -> bindParam(":descripcion",$descripcion, PDO::PARAM_STR);
  $query -> bindParam(":talle",$talle, PDO::PARAM_STR);
  $query -> bindParam(":marca",$marca, PDO::PARAM_STR);
  $query -> bindParam(":estado",$estado, PDO::PARAM_STR);
  $query->execute();
    //$query = $db->prepare("INSERT into imagenes values (default, (SELECT MAX(pr_id) FROM productos), null, '$pic_name', null )");
    $query->execute();

    $miarchivo = dirname(_FILE_);
    $miarchivo = $miarchivo. "/img_user/";
    $miarchivo = $miarchivo. $pic_name;
    move_uploaded_file( $archivo , $miarchivo);
}

function traerCategorias(){
  global $db;

   $query = $db->prepare("SELECT * FROM feriate_db.categorias");
   $query->execute();
   $categorias = $query->fetchAll(PDO::FETCH_ASSOC);
  return $categorias;
}

function productosPorId($value){
        global $db;

         $query = $db->prepare("SELECT * FROM productos
                                WHERE pr_id = '$value'");
         $query->execute();
         $datos_producto = $query->fetch(PDO::FETCH_ASSOC);

     return $datos_producto;

}

 ?>

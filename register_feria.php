<?php
include("crear_feria.php");
$nombre="";
$ubicacion="";
$errores =[];
if ($_POST) {

// Leer los datos del formulario
  $nombre = $_POST["nombre"];
  $ubicacion = $_POST["ubicacion"];
  $descripcion = $_POST["descripcion"];
  $categoria = $_POST["categoria"];
  $avatar = $_FILES["imagen"];
  $archivo = $_FILES["imagen"]["tmp_name"];
  $pic_name = $_FILES["imagen"]["name"];
  $ext = pathinfo($_FILES["imagen"]["name"],PATHINFO_EXTENSION);
  $size = $_FILES["imagen"]["size"]/1000;
  $id = rand(5, 9999999);

  if(strlen($nombre) < 5) {
    $errores []= "El nombre debe teber al menos 5 caracteres";
  }
  if(strlen($ubicacion) < 5) {
    $errores []= "la ubicacion debe teber al menos 5 caracteres";
  }
  if(strlen($descripcion) < 5) {
    $errores []= "la descripcion debe teber al menos 5 caracteres";
  }
    if($ext != "jpg" && $ext !="jpeg" && $ext != "png"){
      $errores[] = "no es el formato adecuado";
    }
    if ($size > 500){
    $errores[] = "archivo muy pesado";
    }

  if(empty($errores)){
    //guardar los datos en un archivo
    //mover foto

    $miarchivo = dirname(_FILE_);
    $miarchivo = $miarchivo. "/img/";
    $miarchivo = $miarchivo. $pic_name;
    move_uploaded_file( $archivo , $miarchivo);

    guardar_feria($nombre, $ubicacion, $descripcion, $categoria, $id, $pic_name, $ext);
    header("location: listados_ferias.php");


  }
}

?>
 <html>
 <head>
   <?php
   include("head.php");
    ?>
 </head>
 <header>
    <?php
    include("header.php")
    ?>
 </header>
   <body>
    <form action="register_feria.php" method="post" enctype="multipart/form-data">
      <label for="nombre">Nombre De La feria:</label>
      <input type="text" name="nombre" required value="<?=$nombre?>">
      <br>
      <label for="ubicacion">ubicacion:</label>
      <input type="ubicacion" name="ubicacion" value="<?=$ubicacion?>">
      <br>
      <label for="descripcion">Descripcion:</label>
      <input type="descripcion" name="descripcion" value="<?=$descripcion?>">
      <br>
      <label for="imagen">imagen:</label>
      <input type="file" name="imagen" required>
      <br>
      <label for="categoria">categoria:</label>
      <input type="file" name="categoria" required>
      <br>
      <input type="submit">
    </form>

    <ul>
      <?php foreach ($errores as $error) :?>
        <li><?=$error?></a></li>
      <?php endforeach; ?>
    </ul>
   </body>
 </html>

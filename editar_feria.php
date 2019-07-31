<?php
include("./resources/funciones_usuarios.php");
require_once("./resources/funciones_productos.php");
if(!estaLogueado()){
   header("location: login.php");
   exit;
}

include("./resources/funciones_feria.php");
if ($_GET){
  $value = $_GET["id"];
$datos_ferias =feria($value);
  $datos_productos =productos_feria($value);
}
$nombre="";
$ubicacion="";
$errores =[];
if ($_POST) {

// Leer los datos del formulario
  $nombre = $_POST["nombre"];
  $ubicacion = $_POST["ubicacion"];
  $descripcion = $_POST["descripcion"];
  $avatar = $_FILES["foto_feria"];
  $archivo = $_FILES["foto_feria"]["tmp_name"];
  $desde = $_POST["desde"];
  $hasta = $_POST["hasta"];
  $pic_name = $_FILES["foto_feria"]["name"];
  $ext = pathinfo($_FILES["foto_feria"]["name"],PATHINFO_EXTENSION);
  $size = $_FILES["foto_feria"]["size"]/1000;
  $id = parse_url($_SERVER['HTTP_REFERER']);
  parse_str($id["query"],$query);
  $fe_id = $query['id'];

  if(strlen($nombre) < 5) {
    $errores []= "El nombre debe teber al menos 5 caracteres";
  }
  if(strlen($ubicacion) < 5) {
    $errores []= "la ubicacion debe teber al menos 5 caracteres";
  }
  if(strlen($descripcion) < 5) {
    $errores []= "la descripcion debe teber al menos 5 caracteres";
  }
  if (!empty($pic_name)){
    if($ext != "jpg" && $ext !="jpeg" && $ext != "png"){
      $errores[] = "no es el formato adecuado";
    }
    if ($size > 500){
    $errores[] = "archivo muy pesado";
    }
  }

  if(empty($errores)){

    actualizar_feria(abrirBaseDeDatos(),$nombre, $desde, $hasta,  $ubicacion, $descripcion, $fe_id, $pic_name, $ext);

  }
}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/crear_feria.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Oswald|Pathway+Gothic+One|Source+Sans+Pro&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cookie|Inconsolata&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abel|Abril+Fatface|Alegreya|Arima+Madurai|Dancing+Script|Dosis|Merriweather|Oleo+Script|Overlock|PT+Serif|Pacifico|Playball|Playfair+Display|Share|Unica+One|Vibur">
<script src="https://kit.fontawesome.com/14dd9125ec.js"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <link rel="stylesheet" href="/resources/demos/style.css">
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<title>Edita tu feria</title>
</head>
<header>
  <?php
  include("header.php");
   ?>
</header>
  <body>
    <div class="container">
      <h1>Crea tu feria</h1>
    <div class="registro">
    <form method="post" action="editar_feria.php" enctype="multipart/form-data">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nombre"> Nombre de la feria <span>*</span></label>
          <input type="nombre" class="form-control" id="nombre" placeholder="Nombre de tu feria" name="nombre" value="<?php echo $datos_ferias["fe_nombre"] ?>" required>
        </div>
        <div class="form-group col-md-6">
          <label for="ubicacion"> Ubicacion  <span>*</span></label>
          <input type="text" class="form-control" id="ubicacion" placeholder="Ubicacion" name="ubicacion"  value="<?php echo $datos_ferias["fe_ubicacion"] ?>" required>
        </div>
        <div class="form-group col-md-6">
          <label for="datepicker"> Desde <span>*</span></label>
          <input type="text" class="form-control" id="datepicker" placeholder="fecha inicio" name="desde"  value="<?php echo $datos_ferias["fe_desde"] ?>" required>
        </div>
        <div class="form-group col-md-6">
          <label for="datepicker1"> Hasta <span>*</span></label>
          <input type="text" class="form-control" id="datepicker1" placeholder="fecha finalizacion" name="hasta"  value="<?php echo $datos_ferias["fe_hasta"] ?>" required>
        </div>
        <script src="./js/crear_feria.js"></script>
        <div class="form-group col-md-6">
          <label for="descripcion"> Descripcion <span>*</span></label>
          <input type="text" name="descripcion" class="form-control" id="descripcion" placeholder="descripcion"  value="<?php echo $datos_ferias["fe_descripcion"] ?>">
        </div>
        <div class="foto">
          <div class="form-group col-md-6">
            <label for="foto_feria">Subi una Foto de tu feria:</label>
            <div class="display">
            </div>
            <input type="file" id="upload" name="foto_feria">
      <button type="submit"id="crear" class="btn btn-primary">Actualizar!</button>
    </form>
    <ul>
      <?php foreach ($errores as $error) :?>
        <li class="alert alert-danger" role="alert"><?=$error?></a></li>
      <?php endforeach; ?>
    </ul>
    </div>
  </div>
  <main>
    <div class="producto">
      <h1>Tus productos</h1>
  <?php if(!empty($datos_productos)) :?>
      <?php foreach ($datos_productos as $producto) :?>
          <div class="card col-md-6 mt-4" >
            <?php if ($producto['img_nombre'] != ''):?>
          <img src="img_user/<?php echo $producto['img_nombre'] ?>" class="card-img-top mt-2" alt="...">
            <?php endif ?>
            <?php if ($producto['img_nombre'] == ''):?>
          <img src="img_user/ropa2.jpg" class="card-img-top" alt="...">
          <?php endif ?>
          <div class="card-body">
            <h4 class="card-text"><?php echo $producto['pr_nombre'] ?></h4>
            <div class="descripcion">
             <h3 class="precio"><b>Precio:<?php echo $producto['pr_precio'] ?></b><h3>
             <h3 class="talle"><b>Talle:<?php echo $producto['pr_talle'] ?></b></h3>
             <h3 class="marca"><b>Marca:<?php echo $producto['pr_marca'] ?></b></h3>
           </div>
           <div class="descripcion">
             <h3 class="estado"><b>Estado:<?php echo $producto['pr_estado'] ?></b></h3>
             <h3 class="cantidad"><b>Cantidad:<?php echo $producto['pr_cantidad'] ?></b></h3>
            </div>
        </div>
            <div class="comprar">

           <?php if(estaLogueado()):?>
            <?php if(esDuenoDeFeria($value)):?>
              <a href="editar_producto.php?id=<?php echo $producto['pr_id'] ?>"><button id="boton"  type="button" name="button" class="btn btn-light m-2"><i class="fas fa-tag"></i>  Editar Producto</button></a>
            <?php endif ?>
         <?php endif ?>
</div>
            </div>
          </div>
        <?php endforeach ?>
        <?php endif; ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
-->  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<?php

if ($_GET){
  $value = $_GET["id"];

  function feria($value){
    $archivo = "./db/ferias.json";
    //para leer y obtener el contenido del archivo
    $json_content = file_get_contents($archivo);
    //para convertir el contenido del archivo en un array
    $array_content = json_decode($json_content,true);

    $datos_ferias='';
    foreach ($array_content["ferias"] as $feria) {
      if ($feria["id"] == $value){
        $datos_ferias = $feria;
      }
    }
    return $datos_ferias;
  }

  $datos_ferias =feria($value);
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <?php
  include("head.php");
   ?>
   <link rel="stylesheet" href="./css/feria.css">
</head>
<body>
<header>
<?php include("header.php") ?>
       </header>
  <div class="inicio">
    <div class="imagen">
      <img src="images/inicio.jpg" alt="">
    </div>
    <div class="info">
      <h1><?php echo $datos_ferias["nombre"] ?></h1>
          <h4 ><a href="#">Ver perfil de Ana</a></h4>
        <h2> <i class="fas fa-star-of-life"></i><?php echo $datos_ferias["ubicacion"] ?></h2>
        <h2> <i class="fas fa-star-of-life"></i><?php echo $datos_ferias["descripcion"] ?></h2>
        <h4><a href="#">Ver ubicacion</a></h4>
        <h2> <i class="fas fa-star-of-life"></i>Fecha: 09/09/2019</h2>
    </div>
  </div>
  <div class="botones">
    <div class="dropdown">
      <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        ORDENAR POR
      </a>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
    </div>
    <div class="dropdown">
      <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        FILTRAR POR
      </a>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
    </div>
  </div>
  <hr>
<div class="productos">
  <div class="card" >
  <img src="images/shoes.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Zapatos Prune sin uso</p>
    <div class="descripcion">
      <h3 class="precio"><b>$950</b></h3>
      <h3 class="talle"><b>Talle 39</b></h3>
    </div>
    <div class="comprar">
  <button type="button" name="button"> <i class="fas fa-shopping-cart"></i> <a href="carrito.php"> Agregar al carrito! </a></button>
  <button type="button" name="button"><i class="fas fa-tag"></i>  Reserva este articulo!</button>
    </div>
  </div>
</div>
  <div class="card" >
  <img src="images/shoes.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Reloj nuevo sin uso</p>
    <div class="descripcion">
      <h3 class="precio"><b>$950</b></h3>
      <h3 class="talle"><b>Talle S</b></h3>
    </div>
    <div class="comprar">
  <button type="button" name="button"> <i class="fas fa-shopping-cart"></i>  Agregar al carrito!</button>
    <button type="button" name="button"><i class="fas fa-tag"></i>  Reserva este articulo!</button>
    </div>
  </div>
</div>
  <div class="card" >
  <img src="images/shoes.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Reloj nuevo sin uso</p>
    <div class="descripcion">
      <h3 class="precio"><b>$950</b></h3>
      <h3 class="talle"><b>Talle S</b></h3>
    </div>
    <div class="comprar">
  <button type="button" name="button"> <i class="fas fa-shopping-cart"></i>  Agregar al carrito!</button>
  <button type="button" name="button"><i class="fas fa-tag"></i>  Reserva este articulo!</button>
    </div>
  </div>
</div>
  <div class="card" >
  <img src="images/shoes.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Reloj nuevo sin uso</p>
    <div class="descripcion">
      <h3 class="precio"><b>$950</b></h3>
      <h3 class="talle"><b>Talle S</b></h3>
    </div>
    <div class="comprar">
  <button type="button" name="button"> <i class="fas fa-shopping-cart"></i>  Agregar al carrito!</button>
    <button type="button" name="button"><i class="fas fa-tag"></i>  Reserva este articulo!</button>
    </div>
  </div>
</div>
  <div class="card" >
  <img src="images/reloj.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Reloj nuevo sin uso</p>
    <div class="descripcion">
      <h3 class="precio"><b>$950</b></h3>
      <h3 class="talle"><b>Talle S</b></h3>
    </div>
    <div class="comprar">
  <button type="button" name="button"> <i class="fas fa-shopping-cart"></i>  Agregar al carrito!</button>
    <button type="button" name="button"><i class="fas fa-tag"></i>  Reserva este articulo!</button>
    </div>
  </div>
</div>
  <div class="card" >
  <img src="images/reloj.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Reloj nuevo sin uso</p>
    <div class="descripcion">
      <h3 class="precio"><b>$950</b></h3>
      <h3 class="talle"><b>Talle S</b></h3>
    </div>
    <div class="comprar">
  <button type="button" name="button"> <i class="fas fa-shopping-cart"></i>  Agregar al carrito!</button>
  <button type="button" name="button"><i class="fas fa-tag"></i>  Reserva este articulo!</button>
    </div>
  </div>
</div>
</div>
<footer>
<?php include("footer.php") ?>
</footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

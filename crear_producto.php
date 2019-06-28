<html lang="en" dir="ltr">
<head>
  <?php
  include("head.php");
   ?>
   <link rel="stylesheet" href="./css/crear_producto.css">
</head>
<header>
  <?php
  include("header.php");
   ?>
</header>

<body>
<h1>Vende tu producto!</h1>
<main>
  <div class="inicio">
    <div class="item">
      <label for=""> Categoria<span>*</span></label>
      <select name="categoria">
            <option>-seleccionar-</option>
            <option>Ropa</option>
            <option>Muebles</option>
            <option>Juguetes</option>
            <option>Electro</option>
            <option>Shoes</option>
          </select>
          <br>
      <label for=""> Talle<span>*</span></label>
      <select name="talle">
        <option>-seleccionar-</option>
            <option>xs</option>
            <option>s</option>
            <option>m</option>
            <option>l</option>
            <option>xl</option>
          </select>
          <br>
    </div>
    <div class="item">
      <label for=""> Marca <span>*</span></label>
      <input type="text" name="marca" value="">
      <br>
        <label for=""> Estado<span>*</span></label>
        <select name="categoria">
          <option>-seleccionar-</option>
              <option>malo</option>
              <option>regular</option>
              <option>bueno</option>
              <option>nuevo</option>
            </select>
      </div>
      </div>
    <h1>Subi fotos!</h1>
  <div class="upload_img">
      <div class="foto">
          <h3>Imagen Principal</h3>
        <div class="display">
        </div>
    <div class="boton">
      <input type="file" id="upload" name="" value="">
    </div>
      </div>
      <div class="foto">
    <h3>Otras imagenes</h3>
    <div class="display">
    </div>
  <div class="boton">
  <input type="file" id="upload" name="" value="">
  </div>
  </div>
  <div class="foto">
    <h3>Otras imagenes</h3>
<div class="display">
</div>
<div class="boton">
<input type="file" id="upload" name="" value="">
</div>
</div>
  </div>
  <h1>Descripcion y precio</h1>
  <div class="descripcion">
    <div class="item_desc">
      <label for="">Titulo <span>*</span></label>
      <br>
      <input type="text" name="" value="">
      <br>
    </div>
    <div class="item_desc">
      <label for="">Descripcion</label>
      <br>
      <textarea name="name"></textarea>
      <br>
    </div>
    <div class="item_desc">
      <label for="">Precio<span>*</span></label>
      <br>
      <input type="text" name="" value="">
    </div>
  </div>
</main>
<footer>
<?php include("footer.php") ?>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

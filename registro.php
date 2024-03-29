<?php
require_once("./resources/funciones_usuarios.php");

$nombre="";
$apellido="";
$email="";
$errores =[];

if ($_POST) {
  $errores = validarRegistracion($_POST);
}

 ?>
<html lang="en">

<head>
  <?php
  include("head.php");
   ?>
   <link rel="stylesheet" href="./css/main.css">
   <link rel="stylesheet" href="./css/registro.css">
   <title>Registro</title>
</head>
<header>
  <?php
  include("header.php");
   ?>
</header>
  <body>
    <div class="container">
      <h1 class="mt-3">Registrate!</h1>
    <form method="post" action="registro.php">
      <div class="field-set">
        <div class="form-input mb-3 mt-3">
          <label for="nombre"> Nombre <span>*</span></label>
          <input type="nombre" class="form-control" id="nombre" placeholder="nombre" name="nombre" required value="<?=$nombre?>">
        </div>
        <div class="form-input mb-3">
          <label for="apellido"> Apellido <span>*</span></label>
          <input type="apellido" class="form-control" id="apellido" placeholder="apellido" name="apellido" required value="<?=$apellido?>">
        </div>
        <div class="form-input mb-3">
          <label for="email"> Email <span>*</span></label>
          <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
        </div>
        <div class="form-input mb-3">
          <label for="pass">Contraseña <span>*</span></label>
          <input type="password" class="form-control" id="pass" placeholder="Password" name="pass" required >
        </div>
        <div class="form-input mb-3">
          <label for="pass_confirm">Confirmacion contraseña<span>*</span></label>
          <input type="password" class="form-control" id="pass_confirm" placeholder="Password" name="pass_confirm" required >
        </div>
      </div>
      <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="notificaciones" name="notificaciones">
      <label class="form-check-label" for="notificaciones">Quiero recibir novedades de Feriate!</label>
      </div>
      <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="terminos_condiciones" placeholder="aceptar_terminos" name="aceptar_terminos" required>
      <label class="form-check-label" for="terminos_condiciones">Acepto <a href="./terminos_condiciones.php">Terminos y Condiciones</a></label>
      </div>
      <button class="btn btn-primary btn-lg" type="submit" >Registrarme</button>
    </form>
    <ul>
      <?php foreach ($errores as $error) :?>
        <li style="color:red"><?=$error?></a></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

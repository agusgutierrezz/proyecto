<?php
require_once("./resources/funciones_usuarios.php");

if (estaLogueado()) {
  header("location:home.php");exit;
}

if ($_POST) {
  $errores = validarLogin($_POST);

  if (count($errores) == 0) {
    loguear($_POST["email"]);
    header("location:home.php");exit;
  } else {
    foreach ($errores as $error) {
       $error;
    }
  }
}

 ?>
<html lang="en" dir="ltr">
<head>
  <?php
  include("head.php");
   ?>
   <link rel="stylesheet" href="./css/login.css">
</head>
<header>
  <?php
    include("header.php");
     ?>
</header>
<body>
  <div class="formulario">
    <form method="post" action="login.php">
      <header class="head-form">
        <h2>Log In</h2>
        <p>Inicia sesion acá con tu email y contraseña.</p>
      </header>
      <br>
      <?php if(isset($error)) :?>
      <p style="color:red; font-size:12px;"><?=$error?></a></p>
      <?php endif; ?>
      <div class="field-set">
        <input class="form-input" id="txt-input" type="text" placeholder="Email" name="email" required>
        <br>
        <input class="form-input" type="password" placeholder="Contraseña" id="pwd" name="pass" required>
        <br>
        <button class="log-in"> Log In </button>
      </div>
      <div class="other">
        <button class="btn submits frgt-pass">Forgot Password</button>
        <button class="btn submits sign-up"><a href='registro.php'>Registrarme</a>
          <i class="fa fa-user-plus" aria-hidden="true"></i>
        </button>
      </div>
  </div>
  </form>
  </div>
</body>
<footer>
<?php include("footer.php") ?>
</footer>
</html>

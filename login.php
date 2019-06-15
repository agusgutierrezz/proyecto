<!DOCTYPE html>
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
        <p>Inicia sesion aca con tu email y contraseña.</p>
      </header>
      <br>
      <div class="field-set">
        <input class="form-input" id="txt-input" type="text" placeholder="Email" required>
        <br>
        <input class="form-input" type="password" placeholder="Contrasena" id="pwd" name="password" required>
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

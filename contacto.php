<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <head>
    <meta charset="utf-8">
    <title>Contacto</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abel|Abril+Fatface|Alegreya|Arima+Madurai|Dancing+Script|Dosis|Merriweather|Oleo+Script|Overlock|PT+Serif|Pacifico|Playball|Playfair+Display|Share|Unica+One|Vibur">
    <link href="https://fonts.googleapis.com/css?family=Oswald|Pathway+Gothic+One|Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cookie|Inconsolata&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/14dd9125ec.js"></script>
    <link rel="stylesheet" href="css/contacto.css">
  </head>
  </head>
  <body>
    <header>
<?php include("header.php") ?>
       </header>

    <div class="formulario">
    <form>
       <header class="head-form">
          <h2>Contactate con nosotros</h2>
          <p>Dejanos tu mensaje y te respondemos en breve!...</p>
       </header>
       <br>
       <div class="field-set">
         <input class="form-input" id="txt-input" type="text" placeholder="Email" required>
          <br>
        <textarea name="name" rows="8" cols="80" placeholder="Tu comentario"></textarea>
          <br>
          <button class="log-in">Enviar! </button>
       </div>
       <div class="other">
        <p>...o buscanos en nuestras redes sociales!</p>
        </div>
      <div class="redes">
        <i class="fab fa-instagram"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-facebook"></i>
       </div>
    </form>
    </div>

  </body>
</html>

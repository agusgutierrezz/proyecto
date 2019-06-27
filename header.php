<?php require_once("./resources/funciones_usuarios.php"); ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
        Feriate.com  <i class="fas fa-store"></i>
      </a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <?php if(!estaLogueado()):?>
    <a class="nav-link" href="login.php">INGRESAR</a>
   <?php endif ?>
   <li class="nav-item active">
     <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
   </li>
</ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
      <?php if(estaLogueado()):?>
        <form  action="cerrar.php" method="post">
         <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="sesion">Cerrar Sesion</button>
       </form>
        <a href="perfil.php"> <button class="btn btn-outline-success my-2 my-sm-0" >Mi Perfil</button></a>
     <?php endif ?>
    </div>
  </nav>

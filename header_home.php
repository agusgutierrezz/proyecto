<?php require_once("./resources/funciones_usuarios.php"); ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
      <i class="fas fa-heart"></i>
    </a>
    <?php if(!estaLogueado()):?>
    <a class="navbar-brand" href="login.php">INGRESAR</a>
   <?php endif ?>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
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
       <button class="btn btn-outline-success my-2 my-sm-0" ><a href="mi_perfil.php">Mi Perfil</a></button>
     <?php endif ?>
    </div>
  </nav>

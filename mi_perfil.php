<?php

require_once("./resources/funciones_usuarios.php");

$usuarioLogueado = traerUsuarioLogueado();
?>

<!DOCTYPE html>
<html lang="en">
  <div class="card-body">
      <?php if ($usuarioLogueado != null) : ?>
        <h2 class="title">Bienvenido <?=$usuarioLogueado["nombre"]?></h2>
      <?php else: ?>
        <h2 class="title">Bienvenido Invitado</h2>
      <?php endif; ?>
  </div>
</body>
</html>

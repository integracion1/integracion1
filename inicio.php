<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
   <title>Entrar - SIRB(Acceder)</title>
   <link rel="stylesheet" type="text/css" href="estilos.css">
  </head>

<body>
  <h1>S.I.R.B.</h1>
  <h2>Sistema Informático de Remuneraciones Basico</h2>
  <form action="Validar.php" id="formlg">
    <h2 class="form_titulo">Ingrese Nombre de Usuario</h2>
    <div class="inputdetabla">
  Usuario   <input type="text" name="user"  /> <br />
  Contraseña<input type="password" name="pass" /> <br />
            <input type="submit" />
            </div>
<?php
    $error = $_GET['error'];
    echo $error;
?>  
  </form>
</body>

</html>




<!DOCTYPE html>
<html lang="es">
<head> 
	<meta charset="utf-8">
	<title>Entrar - SIRB(Acceder)</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<script src="validar.js"></script>
</head>
<body>
	<h1>S.I.R.B.</h1>
	<h2>Sistema Informático de Remuneraciones Basico</h2>
	<form  action="" id="formlg">

		<h2 class="form_titulo">Ingrese Nombre de Usuario</h2>
		<div class="inputdetabla">
			<input type="text" id="Usuario" name="Usuario" placeholder="Usuario" > 
			<input type="password" id="Contraseña" name="Contraseña" placeholder="Contraseña">
			<input type="submit" value="Iniciar Sesión" class="botonenv">
    	</div>
	</form>

	<?php

include("conex.inc");
$consulta = "SELECT Nombre FROM empleados where Apellido='Perez'";
$consulta1 = "SELECT Apellido FROM empleados where Nombre='Juan'";
$Usuario = mysqli_query($db, $consulta);
$Contraseña = mysqli_query($db, $consulta1);

?>

</body>
</html>
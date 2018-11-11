<?php

include("conex.inc");
$usuario = "SELECT Nombre FROM empleados";
$contraseña = "SELECT Apellido FROM empleados";
$respuesta = mysqli_query($db, $usuario);
$respuesta1 = mysqli_query($db, $contraseña);

//Muestro los datos de la Tabla empleados




?>

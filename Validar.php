<?php

session_start();

$user = $_GET["user"];
$passw = $_GET["pass"];

//supongamos que consultamos estos datos en la BD
while(true) {

if ($user=="Gerente" && $passw=="gerente") {
	$_SESSION['estado'] = "logeado";
$_SESSION['nombre'] = "Sr. Administrador";
header("Location: Gerente y modelo/index.html");  
	
}
else {
header("Location: inicio.php?error=Usuario+o+contraseña+inválida");  //redirecciona al inicio enviando un msj de error como parámetro
}
if ($user=="RRHH" && $passw=="recursos") {
	$_SESSION['estado'] = "logeadoR";
$_SESSION['nombre'] = "Sr. Administrador";
header("Location: SISTEMA/index.html");  
	
}
else {
header("Location: inicio.php?error=Usuario+o+contraseña+inválida");  //redirecciona al inicio enviando un msj de error como parámetro
}
	if ($user=="Juridico" && $passw=="juridico") {
	$_SESSION['estado'] = "logeadoR";
$_SESSION['nombre'] = "Sr. Administrador";
header("Location: Juridico/index.html ");  
	
}
else {
header("Location: inicio.php?error=Usuario+o+contraseña+inválida");  //redirecciona al inicio enviando un msj de error como parámetro
}
}
?>
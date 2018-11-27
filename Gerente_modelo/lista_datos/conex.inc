<?php

	$servidor = "db.inf.uct.cl";
	$user = "allanquiman";
	$password = "allanquiman7101";
	$basedato = "allanquiman";

	$db=mysqli_connect($servidor,$user,$password,$basedato);

	if(!$db){
	echo "Error de conexión a la BD";
	exit();
	}

?>
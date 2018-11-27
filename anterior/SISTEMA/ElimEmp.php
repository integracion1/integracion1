<?php
	header("Content-Type: text/html; charset=utf-8");

	$NSuc = $_GET["NSuc"];

	echo "$NSuc";
	echo "hola";

	include ('conex.inc');

	if(!$db) {
		echo "Error de conexion a la BBDD";
		exit();
	}

	$sql = "DELETE FROM `empresa` WHERE `Num_Sucursal`='$NSuc'";

	$respuesta = mysqli_query($db,$sql);
?>
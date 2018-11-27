<?php
	header("Content-Type: text/html; charset=utf-8");

	$Ntasa = $_GET["Ntasa"];
	$NomAf = $_GET["NomAf"];

	include ('conex.inc');

	if(!$db) {
		echo "Error de conexion a la BBDD";
		exit();
	}

	$sql = "UPDATE `afptabla` SET `T_AFP_D`='$Ntasa' WHERE `N_AFP`='$NomAf'";

	$respuesta = mysqli_query($db,$sql);
?>
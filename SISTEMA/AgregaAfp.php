<?php
	header("Content-Type: text/html; charset=utf-8");

	$NomAfp = $_GET["NomAfp"];
	$Tasa = $_GET["Tasa"];

	include ('conex.inc');

	if(!$db) {
		echo "Error de conexion a la BBDD";
		exit();
	}

	$sql = "INSERT INTO `afptabla`(`N_AFP`, `T_AFP_D`, `SIS`) VALUES ('$NomAfp','$Tasa','1,53')";

	$Resp = mysqli_query($db,$sql);
?>
<?php
	header("Content-Type: text/html; charset=utf-8");

	$NumSuc = $_GET["NumSuc"];
	$RaSo = $_GET["RaSo"];
	$RUT = $_GET["RUT"];
	$Giro = $_GET["Giro"];
	$CodAct = $_GET["CodAct"];
	$Direc = $_GET["Direc"];
	$Suc = $_GET["Suc"];
	$Rep = $_GET["Rep"];
	$RUN = $_GET["RUN"];
	$Caja = $_GET["Caja"];
	$Mut = $_GET["Mut"];

	include ('conex.inc');

	if(!$db) {
		echo "Error de conexion a la BBDD";
		exit();
	}

	$sql = "INSERT INTO `empresa`(`Num_Sucursal`, `Razon_Social`, `RUT`, `Giro`, `Cod_Act`, `Direccion`, `Sucursal`, `Rep_Legal`, `RUN_Rep`, `Caja`, `Mutual`) VALUES ('$NumSuc','$RaSo','$RUT','$Giro','$CodAct','$Direc','$Suc','$Rep','$RUN','$Caja','$Mut')";

	$Resp = mysqli_query($db,$sql);

?>
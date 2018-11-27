<?php
	header("Content-Type: text/html; charset=utf-8");

	include ('conex.inc');

	if(!$db) {
		echo "Error de conexion a la BBDD";
		exit();
	}

	$sql = "SELECT * FROM `afptabla`";

	$respuesta = mysqli_query($db,$sql);

	echo "<table frame=box rules=all style='margin-left: auto; margin-right: auto;'>";
	echo "<tr>
		<th><font face='Arial' size='2'><CENTER>Nombre AFP</font>
		<th><font face='Arial' size='2'><CENTER>Tasa AFP</font>
		<th><font face='Arial' size='2'><CENTER>SIS</font>
		<tr/>";
	while($fila=mysqli_fetch_object($respuesta)) {
		echo "<tr>
		<td><font face='Arial' size='2'><CENTER>$fila->N_AFP</font>
		<td><font face='Arial' size='2'><CENTER>$fila->T_AFP_D</font>
		<td><font face='Arial' size='2'><CENTER>$fila->SIS</font>
		<tr/>";
		}
	echo "</table>"	
?>
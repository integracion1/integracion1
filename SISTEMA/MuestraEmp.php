<?php
	header("Content-Type: text/html; charset=utf-8");

	include ('conex.inc');

	if(!$db) {
		echo "Error de conexion a la BBDD";
		exit();
	}

	$sql = "SELECT * FROM `empresa`";

	$respuesta = mysqli_query($db,$sql);

	echo "<table frame=box rules=all style='margin-left: auto; margin-right: auto;'>";
	echo "<tr>
		<th><font face='Arial' size='2'><CENTER>Num Sucursal</font>
		<th><font face='Arial' size='2'><CENTER>Razon Social</font>
		<th><font face='Arial' size='2'><CENTER>RUT</font>
		<th><font face='Arial' size='2'><CENTER>Giro</font>
		<th><font face='Arial' size='2'><CENTER>Codigo Actividad</font>
		<th><font face='Arial' size='2'><CENTER>Sucursal</font>
		<th><font face='Arial' size='2'><CENTER>Representante Legal</font>
		<th><font face='Arial' size='2'><CENTER>RUN Representante</font>
		<th><font face='Arial' size='2'><CENTER>Caja</font>
		<th><font face='Arial' size='2'><CENTER>Mutual</font>
		<tr/>";
	while($fila=mysqli_fetch_object($respuesta)) {
		echo "<tr>
		<td><font face='Arial' size='2'><CENTER>$fila->Num_Sucursal</font>
		<td><font face='Arial' size='2'><CENTER>$fila->Razon_Social</font>
		<td><font face='Arial' size='2'><CENTER>$fila->RUT</font>
		<td><font face='Arial' size='2'><CENTER>$fila->Giro</font>
		<td><font face='Arial' size='2'><CENTER>$fila->Cod_Act</font>
		<td><font face='Arial' size='2'><CENTER>$fila->Sucursal</font>
		<td><font face='Arial' size='2'><CENTER>$fila->Rep_Legal</font>
		<td><font face='Arial' size='2'><CENTER>$fila->RUN_Rep</font>
		<td><font face='Arial' size='2'><CENTER>$fila->Caja</font>
		<td><font face='Arial' size='2'><CENTER>$fila->Mutual</font>
		<tr/>";
		}
	echo "</table>"	
?>
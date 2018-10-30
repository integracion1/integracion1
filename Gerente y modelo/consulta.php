<?php
	//primero nos conectamos al motor de BD
	include("conex.inc");
	
	$consulta = "SELECT NAME FROM empleados WHERE NoEmpleado= ";
	$respuesta = mysqli_query($db, $consulta);

	//Muestro los datos de la Tabla empleados
	while($fila=mysqli_fetch_object($respuesta)){
	echo "<tr id='MiCapa'> <td> $fila->NoEmpleado </td>
	<td> $fila->Nombre</td>
	<tr>";
	}

?>
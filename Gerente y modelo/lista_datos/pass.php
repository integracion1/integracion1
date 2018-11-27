<?php
include("conex.inc");
$consulta1 = "SELECT * FROM empleados where NoEmpleado<9";
$respuesta1 = mysqli_query($db, $consulta);
//Muestro los datos de la Tabla empleados
$c=0;
while($fila=mysqli_fetch_object($respuesta1)){
	if ($c==0) {
		echo "
			<tr > <br>
				<td >NºEmp</td>
				<td >Nombre</td>
				<td >Apellido</td>
				<td >Sueldo</td>
				<td >Departamento</td>
			</tr><br>";
			
			$c++;
	}
	

echo "<tr> <td> $fila->NoEmpleado </td>
		   <td> $fila->Nombre</td>
		   <td> $fila->Apellido</td>
		   <td> $fila->Sueldo</td>
		   <td>	$fila->Departamento</td></tr>";

}
?>
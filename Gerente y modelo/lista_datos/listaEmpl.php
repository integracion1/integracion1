<!Doctype html>
<html lang=es>

<head>
<title>Sirb</title>
<meta charset="UTF-8">
<style>
	h1,tr{ text-align: center;}

	body{ background-image: url(azul.jpg);}

	#damn{ color: red;}

</style>
</head>

<body>
	<h1>Lista de Empleados Sirb</h1>

<table border=1>
<tr > <br>
	<td id="damn">NºEmp</td>
	<td id="damn">Nombre</td>
	<td id="damn">Apellido</td>
	<td id="damn">Sueldo</td>
	<td id="damn">Departamento</td>
</tr>

<?php

//Aqui insertaremos el listado de empleados
include("conex.inc");
$consulta = "SELECT * FROM empleados";
$respuesta = mysqli_query($db, $consulta);

//Muestro los datos de la Tabla empleados
while($fila=mysqli_fetch_object($respuesta)){

echo "<tr> <td> $fila->NoEmpleado </td>
		   <td> $fila->Nombre</td>
		   <td> $fila->Apellido</td>
		   <td> $fila->Sueldo</td>
		   <td>	$fila->Departamento</td></tr>";
}
?>

</table>
</body>
</html>
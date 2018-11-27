<?php

//Aqui insertaremos el listado de empleados
include("conex.inc");
$consulta = "SELECT * FROM catalogo group by Categoria";
$respuesta = mysqli_query($db, $consulta);
$c=0;
while($fila=mysqli_fetch_object($respuesta)){
	if ($c==0) {
		echo "	<tr > <br>
				<td >Categoria</td>
				<td >Nombre</td>
				<td >Precio</td>
				<td >Stock</td>
			</tr><br>";

			$c++;
	}
echo "<tr> <td> $fila->Categoria</td>
		   <td> $fila->Nombre</td>
		   <td> $fila->Precio</td>
		   <td> $fila->Stock</td></tr>";

}
?>
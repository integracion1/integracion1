<?php
	include("conex.inc");


        $consulta = "SELECT AVG(Sueldo) AS 'prom_sueld' FROM empleados ";
        $respuesta = mysqli_query($db, $consulta);

        while($fila=mysqli_fetch_object($respuesta)){

        echo "<table border=1>
        <tr><br>
        	<td id='damn'>prom_sueld</td></tr> ";
        echo "<tr> 
               <td> $fila->prom_sueld </td>
               </tr>";
}

?>
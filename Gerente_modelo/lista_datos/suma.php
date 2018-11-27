<?php
	include("conex.inc");


        $consulta = "SELECT Sum(Sueldo) AS 'sum_sueld' FROM empleados ";
        $respuesta = mysqli_query($db, $consulta);

        while($fila=mysqli_fetch_object($respuesta)){

        echo "<table border=1>
        <tr><br>
        	<td id='damn'>sum_sueld</td></tr> ";
        echo "<tr> 
               <td> $fila->sum_sueld </td>
               </tr>";
}

?>
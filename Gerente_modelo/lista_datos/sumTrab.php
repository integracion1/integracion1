<?php  
include("conex.inc");


        $consulta = "SELECT count(*) AS 'sum_trab' FROM empleados ";
        $respuesta = mysqli_query($db, $consulta);

        while($fila=mysqli_fetch_object($respuesta)){

        echo "<table border=1>
        <tr><br>
        	<td id='damn'>sum_trab</td></tr> ";
        echo "<tr> 
               <td> $fila->sum_trab </td>
               </tr>";
}

?>
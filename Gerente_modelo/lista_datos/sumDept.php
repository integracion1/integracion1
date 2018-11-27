<?php  
include("conex.inc");


        $consulta = "SELECT COUNT(Departamento) As sum_trab, Departamento FROM `empleados` GROUP by Departamento";
        $respuesta = mysqli_query($db, $consulta);
        while($fila=mysqli_fetch_object($respuesta)){
	        	
	        echo "<tr> 
	               <td> $fila->sum_trab </td>
	               <td> $fila->Departamento</td>
	               </tr>";
}

?>
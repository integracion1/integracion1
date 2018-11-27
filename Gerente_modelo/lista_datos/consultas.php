<?php

  $Emp1 = $_GET["Emp"];

        include("conex.inc");
        

        $consulta = "SELECT * FROM empleados where NoEmpleado=$Emp1";
        $respuesta = mysqli_query($db, $consulta);

        while($fila=mysqli_fetch_object($respuesta)){

        echo "<table border=1><tr><br><td id='damn'>NºEmp</td><td id='damn'>Nombre</td><td id='damn'>Apellido</td><td id='damn'>Sueldo</td><td id='damn'>Departamento</td></tr> ";
        echo "<tr> 
               <td> $fila->NoEmpleado </td>
               <td> $fila->Nombre</td>
               <td> $fila->Apellido</td>
               <td> $fila->Sueldo</td>
               <td> $fila->Departamento</td>
               </tr>";
}
        
?>
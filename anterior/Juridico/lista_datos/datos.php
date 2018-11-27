<?php
// ejemplo de video tutorial xd
// Conectando, a BD



$link = mysqli_connect("","","","") //A que  base de datos me conecto !! Bd,User,PW,Table

    
    or die	( "fallo de coneccion a mysql" . mysqli_connect_error());
    



// Realiza consulta
$query = 'SELECT * FROM empleados ';

$resp = mysqli_query($link , $query) or die ('Consulta fallida: ' . mysql_error());

echo "<table border='1'>";
  echo "<tr><td>Nombre</td>
            <td>Rut</></tr>";

  while($fila=mysqli_fetch_object($resp)) {
       echo "<tr><td>$fila->Nombre</td>
                 <td>$fila->Rut</td></tr>";
  }


?>



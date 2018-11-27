<?php

	$Razon = $_GET["Razon"];

    include ("conect.inc");

    $Cons =    "SELECT Num_Sucursal, Razon_Social, RUT
                FROM empresa
                WHERE Razon_Social = '$Razon'";
    $resp = mysqli_query($db, $Cons);

    echo "<h1 style='font-family:Helvetica; font-size:26px; text-indent:2cm'>Información Disponible</h1>";
    while ($fila=mysqli_fetch_object($resp)) {
        echo "Numero de Sucursal: '$fila->Num_Sucursal' <br>";
        echo "Razon Social: '$fila->Razon_Social'<br>";
        echo "Run: '$fila->RUT'";
        
    }

?>
<?php

	$Usuario = $_GET["Usuario"];
    $RUT = $_GET["RUT"];
    $Depa = $_GET["Depa"];

    include ("conect.inc");

    $Cons =    "SELECT Nombre, RUT_TRABAJADOR, Departamento 
                FROM personal 
                WHERE Nombre = '$Usuario' AND RUT_TRABAJADOR = '$RUT' AND Departamento = '$Depa'";
    $resp = mysqli_query($db, $Cons);

    echo "<h1 style='font-family:Helvetica; font-size:26px; text-indent:2cm'>Información Disponible</h1>";
    while ($fila=mysqli_fetch_object($resp)) {
        echo "Nombre: '$fila->Nombre' <br>";
        echo "Run: '$fila->RUT_TRABAJADOR'<br>";
        echo "Departamento: '$fila->Departamento'";
    }

?>
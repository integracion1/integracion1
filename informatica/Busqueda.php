<?php

	$Usuario = $_GET["Usuario"];
    $RUT = $_GET["RUT"];
    $Depa = $_GET["Depa"];

    include ("conect.inc");

    $Cons =    "SELECT Nombre, Apellidos, RUT_TRABAJADOR, Departamento, Fecha_Nac, Direccion, Ciudad, Comuna, Telefono
                FROM personal
                WHERE Nombre = '$Usuario' AND RUT_TRABAJADOR = '$RUT' AND Departamento = '$Depa'";
    $resp = mysqli_query($db, $Cons);

    echo "<h1 style='font-family:Helvetica; font-size:26px; text-indent:2cm'>Información Disponible</h1>";
    while ($fila=mysqli_fetch_object($resp)) {
        echo "Nombres: '$fila->Nombre' <br><br>";
        echo "Apellidos: '$fila->Apellidos' <br><br>";
        echo "Run: '$fila->RUT_TRABAJADOR'<br><br>";
        echo "Departamento: '$fila->Departamento'<br><br>";
        echo "Fecha Nacimiento: '$fila->Fecha_Nac' <br><br>";
        echo "Direccion: '$fila->Direccion' <br><br>";
        echo "Ciudad: '$fila->Ciudad' <br><br>";
        echo "Comuna: '$fila->Comuna' <br><br>";
        echo "Telefono: '$fila->Telefono' <br><br>";
    }

?>
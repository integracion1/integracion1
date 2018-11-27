<?php

	$Usuario = $_GET["Usuario"];
    $RUT = $_GET["RUT"];
    $Depa = $_GET["Departamento"];

    $serv = "db.inf.uct.cl";
    $user = "allanquiman";
    $password = "allanquiman7101";
    $basedatos = "allanquiman";
    $db = mysqli_connect($serv, $user, $password, $basedatos);

    $Cons =    "SELECT Nombre, Rut, Departamento 
    			FROM empleados 
    			WHERE Nombre = '$Usuario' AND Rut = $RUT AND Departamento = '$Depa'";
    $resp = mysqli_query($db, $Cons);

    echo "<h1 style='font-family:Helvetica; font-size:26px; text-indent:2cm'>Información Disponible</h1>";
    echo "<p>Nombre: 'Nombre'</p>";
    echo "<p>Rut: 'Rut'</p>";
    echo "<p>Departamento: 'Departamento'</p>";
?>
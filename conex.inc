<?php
$servidor = "db.inf.uct.cl";
$user     = "allanquiman;
$password ="allanquiman7101";
$basedato ="allanquiman";
$db = mysqli_connect($servidor, $user, $password, $basedato);
echo mysqli_connect_error($db);
if(!$db){
	echo"Error de conexion a la BD";
	exit();
}

?>
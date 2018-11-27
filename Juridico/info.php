<?php
$bd1 = mysqli_connect("db.inf.uct.cl","allanquiman","allanquiman7101","allanquiman");
$Nombre = $_POST['Nombre'];
$Rut = $_POST['Rut'];
$Comentarios = $_POST ['Comentarios'];
echo"<br>    </br>";
echo"<br>    </br>";
echo"Comentarios del Personal Registrado";
$respuesta2 = mysqli_query($bd1,"INSERT INTO Comentario (Nombre,Rut,Comentario)
VALUES ('$Nombre','$Rut','$Comentarios')");
$respuesta2;
echo"<br></br>";
$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
  echo "<font size=5><a href='$url'>VOLVER</a></font>";
?>


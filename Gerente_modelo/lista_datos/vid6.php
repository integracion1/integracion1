<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title></title>
<script type="text/javascript" src="jquery331.js"></script>

  <script type="text/javascript" >

    $(document).ready(Principal);
    
    function Principal(){
      $("#usuario").change(TraerUsuario);
    }

 

  function TraerUsuario(){ 
  $.ajax({
        url:     "cargaUser.php?mail="+this.value,
        success: function(datos){
                             $("#ficha").html(datos);
                 }
        });

  }

</script>
</head>

 

<body>
<?php
  //Conectarse
  include(conex.inc);
  
  $sql = "select * from usuarios";
?>
  <select name="usuario" id="usuario">
<?php
    $respuesta = mysqli_query($sql, $db);
    while($fila=mysqli_fetch_object($respuesta)) {
        echo"<option value='$fila->email'> $fila->nombre $fila->apellido</option>\n";
    }
?>  
  
  </select>
  <div id="ficha" style="width:250px; height:200px; background-color:gray;
                          position:relative">
  
  </div>
</body>
</html>
<!doctype html>
<html lang=es>
<head>
  <title>Finanzas</title>
  <meta charset=UTF-8>
  <link rel="stylesheet" type="text/css" href="estilo2.css">
  <script type="text/javascript" src="jquery331.js"></script>
  <script>
    $(document).ready(function(){

      $("#inp1").click(MostrarB1);
      $("#inp2").click(MostrarB2);
      $("#inp3").click(MostrarB3);
      $("#prin1").click(VolverA);
      $("#prin2").click(VolverA);
      $("#prin3").click(VolverA);
      $("#botext").click(Datos);
      $("#Promsueld").click(Promsu);
      $("#Sum_suel").click(sumsuel);
      $("#Cantrabj").click(Cantrabajadores);
      $("#Trabdep").click(trabadeptos);
    });
    function Datos(){
      var ValorId=document.getElementById("datos").value;
      $.ajax({
            type: 'POST',
              url:"consultas.php?Emp="+ValorId,
              success: function(datos){
                      $("#tabla1").html(datos);
                  },
                  error: function(){
                    alert("No se ha logrado establecer una conexión con el servidor, por favor, reintente.");
                  }
                });

    }
    function Promsu(){
      $.ajax({
            type: 'POST',
              url:"promedio.php",
              success: function(datos){
                      $("#tabla1").html(datos);
                  },
                  error: function(){
                    alert("No se ha logrado establecer una conexión con el servidor, por favor, reintente.");
                  }
                });
            

    }
    function sumsuel(){
      $.ajax({
            type: 'POST',
              url:"suma.php",
              success: function(datos){
                      $("#tabla1").html(datos);
                  },
                  error: function(){
                    alert("No se ha logrado establecer una conexión con el servidor, por favor, reintente.");
                  }
                });

    }
    function Cantrabajadores(){
      $.ajax({
            type: 'POST',
              url:"sumTrab.php",
              success: function(datos){
                      $("#tabla1").html(datos);
                  },
                  error: function(){
                    alert("No se ha logrado establecer una conexión con el servidor, por favor, reintente.");
                  }
                });

    }
    function trabadeptos(){
      $("#tabla1").html("<table border=1><tr><br><td id='damn'>sum_trab</td><td id='damn'>Departamento</td></tr> ");
      $.ajax({
            type: 'POST',
              url:"sumDept.php",
              success: function(datos){
                      $("#tabla1").append(datos);
                  },
                  error: function(){
                    alert("No se ha logrado establecer una conexión con el servidor, por favor, reintente.");
                  }
                });

    }

    function MostrarB1(){
      $("#inp1").fadeOut(50);
      $("#inp2").fadeOut(50);
      $("#inp3").fadeOut(50);
      $("#datos").fadeIn(50);
      $("#prin1").fadeIn(50);
      $("#botext").fadeIn(50);
      
    }
    function MostrarB2(){
      $("#inp1").fadeOut(50);
      $("#inp2").fadeOut(50);
      $("#inp3").fadeOut(50);

      $("#Promsueld").fadeIn(50);
      $("#Sum_suel").fadeIn(50);
      $("#prin1").fadeIn(50);
    }
    function MostrarB3(){
      $("#inp1").fadeOut(50);
      $("#inp2").fadeOut(50);
      $("#inp3").fadeOut(50);

      $("#Cantrabj").fadeIn(50);
      $("#Trabdep").fadeIn(50);
      $("#prin1").fadeIn(50);

    }
    function VolverA(){

      $("#datos").fadeOut(50);
      $("#Promsueld").fadeOut(50);
      $("#Sum_suel").fadeOut(50);
      $("#Cantrabj").fadeOut(50);
      $("#Trabdep").fadeOut(50);
      $("#prin1").fadeOut(50);
      $("#prin2").fadeOut(50);
      $("#prin3").fadeOut(50);
      $("#botext").fadeOut(50);

      $("#inp1").fadeIn(50);
      $("#inp2").fadeIn(50);
      $("#inp3").fadeIn(50);

    }


    

  </script>
</head>

<body>
    <nav>Gerencia</nav>
    <section>
      <p> Bienvenido</p>
      <article>Seleccione la Acción<hr>
      <form>
      <input id="inp1" type="button" value="Datos">

        <input id="datos" style="display: none;" type="text" placeholder="ingrese No Emp"><br>
          <input type="button" id="botext" value="enviar" style="display: none;"><br>

      <input id="inp2" type="button" value="Sueldos">
        <input id="Promsueld" style="display: none" type="button" value="Promedio de Sueldos"><br>       
          
        <input id="Sum_suel" style="display: none;" type="button" value="Suma de sueldos"><br>
        

      <input id="inp3" type="button" value="Trabajadores">
        <input id="Cantrabj" style="display: none;" type="button" value="Cantidad de Trabajadores"><br>
        <input id="Trabdep" style="display: none;" type="button" value="Cant Trab por depto"><br>
        <!--<input type="button" value="volver a Principal" id="prin3" style="display: none">-->

        <input type="button" value="volver a Principal" id="prin1" style="display: none">

      </form>

      
      </article>

      <aside> Resultados<hr>
        <div id="tabla1"></div>


  	  </aside>
    </section>
    <footer>Pie de página</footer>
</body>
</html>

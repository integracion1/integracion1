<!doctype html>
<html lang=es>
<head>
  <title>Finanzas</title>
  <meta charset=UTF-8>
  <link rel="stylesheet" type="text/css" href="estilo2.css">
  <script>
     var objeto = null

    if (window.XMLHttpRequest) objeto = new XMLHttpRequest() //para Mozilla
    else if (window.ActiveXObject) objeto = new ActiveXObject("Microsoft.XMLHTTP") //Para IExplorer

    function datos(){
        var ValorID=12;
        url="consultas.php?Emp="+ValorID
        objeto.open("GET",url)
        objeto.send()

        objeto.onreadystatechange = ObtenerResp

    }

    function ObtenerResp(){
      if(objeto.readyState==4)
        //cargar en la capa  div los datos del auto seleccionado
        document.getElementById("tabla1").innerHTML = objeto.responseText
    }
    function sueldos(){
        url="consultas.php?Sueldos="
        objeto.open("GET",url)
        objeto.send()
        
        objeto.onreadystatechange = ObtenerResp


    }
    function cantrabj(){


    }
  </script>
</head>

<body>
    <nav>Gerencia</nav>
    <section>
      <p> Bienvenido</p>
      <article>Seleccione la Acción<hr>
      <form >

      <input id="Datos" type="text" onclick="datos(ValorID)"><br>

      <input id="Sueldos" type="button" value="Sueldos" onclick="sueldos()"><br>
        
      <input id="Cantrabj" type="button" value="Trabajadores" onclick="cantrabj()"><br>
        
      </form>

      
      </article>

      <aside> asd <hr>
        <div id="pretabla1"></div>
        <div id="tabla1"></div>


  	  </aside>
    </section>
    <footer>Pie de página</footer>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Compra del vehiculo (MX)</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="carros,venta,eroticos" />
    <meta name="descricion" content="" />
    <meta name="autor" content="Rodrigo Palma Garcia" />
    <link rel="stylesheet" type="text/css" href="../css/estilos.css" />
    <link rel="icon" type="image/x-icon" href="../img/icon.jpg" />
    <link rel="stylesheet" type="text/css" href="../css/normalize.css" />

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <script src="../jquery/jquery-3.5.1.min.js"></script>
    <script src="../popper/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Glory:wght@300&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@600&family=Glory:wght@300&display=swap"
      rel="stylesheet"
    />
  </head>
  <body background="../img/img_woman4.jpg">
    <div id="particles-js"></div>
    <header class="contenedor">

    <center>
      <dir style="width: 65%;">
          <div class="row" id="box-search">
              <div class="thumbnail text-center">
                  <img src="../img/logo.jpg" loading="lazy" style="width: 85%;" class="img-responsive img-fluid rounded dolar" />
                  <div class="caption">
                      <h2>
                          <span class="badge badge-pill badge-warning">Autos Don Venas</span
              >
            </h2>
            <h1>
              <span class="badge badge-pill badge-primary"
                >Los mejores precios</span
              >
            </h1>
          </div>
        </div>
      </div>
    </dir>
  </center>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <ul class="navbar-nav mr-auto">
                                  <a class="navbar-brand text-uppercase text-expanded" href="../index.html">Inicio</a
        >
        
      </ul>
    </div>
  </nav>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <center><img src="../img/img_tcar2.jpg" alt=""></center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <center><div class="col-sm-8" id="hablas">
      <p id="one" >La 11ª generación de Honda Civic llega completamente renovada y una vez más, reafirma el porqué
         se ha convertido en un icónico sedán para todos.</p>
  </div></center>


    <?php
    require("../conexion.php");
    global $conexion;
    mysqli_set_charset($conexion, 'utf8');

    $laVehiculos = array();
    $sqlVehiculos = "SELECT * FROM Vehiculos WHERE Id = 13";
    $resultadoVehiculos = mysqli_query($conexion, $sqlVehiculos);
    while ($Vehiculos = mysqli_fetch_array($resultadoVehiculos, MYSQLI_ASSOC)) {
        $laVehiculos[] = $Vehiculos;
    }
    mysqli_close($conexion)
    ?>

   <div class="divs">

       <div align="left">
           <img class="img-fluid rounded girls" loading="lazy" src="../img/img_woman1.jpg" width="90%" >
       </div>

       <div>
           <table class="table table-striped table-hover">
               <thead id="thed">
                   <tr id="tr">
                       <th id="th">Marca</th>
                       <th id="th">Precio</th>
                   </tr>
               </thead>
               <tbody id="body">
                   <?php
                   foreach ($laVehiculos as $Vehiculos) {
                       echo "<tr>";
                       echo "<td>" . $Vehiculos['Marca'] . "</td>";
                       echo "<td>" . $Vehiculos['Precio'] . "</td>";
                       echo "</tr>";
                   }
                   ?>
               </tbody>
           </table>

       </div>

       <div align="right"><img class="img-fluid rounded girls" loading="lazy" src="../img/img_woman3.jpg" width="60%"></div>

                  </div>


                 <center> <div class="col-sm-8" id="hablas">
                    <p>Para comprar tu auto nuevo marca, para agendar una cita</p>
                    <p><span class="badge badge-info">numeo de tel: 01800594carrrovenas</span></p>
                  </div></center>
    <center>
      <div style="width:50%">
          <marquee onmouseover="stop()" onmouseout="start()" scrollamount="10" scrolldelay="100">
              <a href="https://www.facebook.com/rodrigo.alma.14" target="_blank" title="Facebook"><img id="ico" loading="lazy" src="../img/ico1.png" alt="facebook"></a>
              <a href="https://www.instagram.com/rodrigopalma39/" target="_blank" title="Instagram"><img id="ico" loading="lazy" src="../img/ico2.png" alt="instagram"></a>
              <a href="https://twitter.com/rodrigopalma234" target="_blank" title="Twiter"><img id="ico" loading="lazy" src="../img/ico3.png" alt="twiter"></a>
          </marquee>
      </div>
  </center>

  <div class="jumbotron text-center" style="margin-bottom:0" id="copy">
      <p class="copyp">Todos los derechos reservados, queda proivida su distribucion total o parcial...</p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <p class="copyp">Copyright &copy; covid del 2021 </p>
  </div>
    </header>
    
    <script src="../js/particles.min.js"></script>
    <script src="../js/apps.js"></script>
  </body>
</html>

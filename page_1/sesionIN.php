<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Registro (Mx)</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="carros,venta,eroticos" />
    <meta name="descricion" content="" />
    <meta name="autor" content="Rodrigo Palma Garcia" />
    <link rel="stylesheet" type="text/css" href="css/estilos.css" />
    <link rel="icon" type="image/x-icon" href="img/icon.jpg" />
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <script src="jquery/jquery-3.5.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

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

  <body background="img/img_woman4.jpg">
    <div id="particles-js"></div>
    <header class="contenedor">

    <center>
        <dir style="width: 65%;">
            <div class="row" id="box-search">
                <div class="thumbnail text-center">
                    <img src="img/logo.jpg" loading="lazy" style="width: 85%;" class="img-responsive img-fluid rounded dolar" />
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
                                    <a class="navbar-brand text-uppercase text-expanded" href="index.html">Inicio</a
          >
          
        </ul>
      </div>
    </nav>


    <?php
    require("conexion.php");
    global $conexion;
    mysqli_set_charset($conexion, 'utf8');

    $sql1 = "SELECT * FROM Clientes ORDER BY Nombre ASC";
    $resultadoClientes = mysqli_query($conexion, $sql1);
    while ($Clientes = mysqli_fetch_array($resultadoClientes, MYSQLI_ASSOC)) {
        @$listaClienteses .= "<option value  = $Clientes[Nombre]>$Clientes[Nombre]</option>";
    }
    mysqli_close($conexion);
    ?>

    <center>
        <div style="width: 70%;">
            <form class="form-horizontal" role="form" action="sesionIN_alt.php" method="post">
                <div>
                    <div>
                        <h2> <span class="badge badge-pill badge-info">LLenado de datos correspondiente a la Tabla Clientes</span></h2>
                    </div>

                    <div class="form-group" id="form">
                        <table class="table table-striped table-hover">
                            <tr>
                                <td><label id="Fecha" class="col-lg-2 control-label">Fecha</label></td>
                                <td><input type="date" class="form-control" id="inputSeleccionado Fecha" name="Fecha" value=""></td>
                            </tr>
                            <tr>
                                <td><label id="Nombre" class="col-lg-2 control-label">Nombre</label></td>
                                <td><input type="text" class="form-control" id="inputSeleccionado Nombre" name="Nombre" value="" placeholder="Introduce tu Nombre"></td>
                            </tr>
                            <tr>
                                <td><label id="E_mail" class="col-lg-2 control-label">Correo electronico</label></td>
                                <td><input type="text" class="form-control" id="inputSeleccionado E_mail" name="E_mail" value="" placeholder="Introduce tu correo"></td>
                            </tr>
                            <tr>
                                <td><label id="No_Cuenta" class="col-lg-2 control-label">No de cuenta</label></td>
                                <td><input type="text" class="form-control" id="inputSeleccionado No_Cuenta" name="No_Cuenta" value="" placeholder="Introduce tu No Cuenta"></td>
                            </tr>
                        </table>
                    </div>


                    <form class="form-horizontal" action="sesionIN_alt.php" action="compra.php" method="post">
                        <input type="submit" class="btn btn-danger" name="" value="Registrar">
                        <input type="reset" class="btn btn-primary" name="" value="Limpiar">
                    </form>

                </div>
            </form>
        </div>
    </center>

   

    <center><div style="width:50%">
              <marquee onmouseover="stop()" onmouseout="start()" scrollamount="10" scrolldelay="100">
                  <a href="https://www.facebook.com/rodrigo.alma.14" target="_blank" title="Facebook"><img id="ico" loading="lazy" src="img/ico1.png" alt="facebook"></a>
                  <a href="https://www.instagram.com/rodrigopalma39/" target="_blank" title="Instagram"><img id="ico" loading="lazy" src="img/ico2.png" alt="instagram"></a>
                  <a href="https://twitter.com/rodrigopalma234" target="_blank" title="Twiter"><img id="ico" loading="lazy" src="img/ico3.png" alt="twiter"></a>
              </marquee>
          </div></center>

    <div class="jumbotron text-center" style="margin-bottom:0" id="copy">
        <p class="copyp">Todos los derechos reservados, queda proivida su distribucion total o parcial...</p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <p class="copyp">Copyright &copy; covid del 2021 </p>
        </center>
    </div>
      </header>
      
    <script src="js/particles.min.js"></script>
    <script src="js/apps.js"></script>
  </body>
</html>
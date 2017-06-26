<!DOCTYPE html>
<html>
<script>
function recarga(){
location.href=location.href
}
setInterval('recarga()',200000)
</script>
<head>
    <meta charset="utf-8">
    <title>SERP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Wilmer Padilla">
    <script type="text/javascript" src="bootstrap/js/jqueryn.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="css2/botones.css">
  </head>
  <body style="background: #e0e0e0">
     <div  class="container-fluid">
            <div class="row">
            <div class="col-md-12">
         <div id="carousel-example" data-interval="5000" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active">
          <img style="width: 100%; height: 180px" src="images\index2img.jpg" class="img-responsive">
        </div>
        <div class="item">
          <img style="width: 100%; height: 180px" src="images\pastopografia.jpg" class="img-responsive">
        </div>
        <div class="item">
          <img style="width: 100%; height: 180px" src="images\Maracaibo.jpg" class="img-responsive">
        </div>
      </div>
    </div>
</div>
</div>
</div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <?php include( "include/menu2.php"); ?>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!--///////////////////////////////////////////////////Empieza cuerpo
          del documento interno////////////////////////////////////////////-->
          <h3 class="text-center" style="padding-bottom: 20px; border-bottom: 2px solid #c64949">Administración</h3>
          <div style="margin-bottom: 40px;" class="col-md-12">
              <div class="text-center">
                  <form class="" action="consultar_reporte_total.php" method="post">
             <label class="">Desde:</label> <input class="" type="date" name="fecha_desde">
              <label class="">Hasta:</label> <input class="" type="date" name="fecha_hasta">
              </div>
          </div>
          <div class="">
            <div style="margin-bottom: 40px" class="col-md-6">
              <div class="section">
                <h4 class="text-center">Reportes
                  <span class="glyphicon glyphicon-list-alt"></span>
                </h4>
                <div style="margin-left: 100px;" class="lead nav nav-pills">
                  <div class="bor">

                      <a style="width: 300px" class="btn btn-default " href="exento.php" > Exentos </a>
                  </div>
                  <div class="bor">
                    <a style="width: 300px" class="btn btn-default " href="cierre.php" >Cierres </a>
                  </div>
                  <div class="bor">
                      <button style="width: 300px" class="btn btn-default ">Reporte Total </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="section">
                <h4 class="text-center">Control de usuarios
                 <span class="glyphicon glyphicon-user"></span>
                </h4>
                <div style="margin-left: 120px;" class="nav nav-tabs">
                  <div class="bor">
                    <a href="registrar.php" class="btn btn-default" style="width: 300px">Registrar usuario</a>
                  </div>
                  <div class="bor1">
                    <a href="usuarios.php" class="btn btn-default" style="width: 300px">Modificar usuario</a>
                  </div>
                </div>
              </div>
            </div>
            </div>
        </div>

    </div>
    </div>
      <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
           <div class="">
              <div class="col-md-6">
                <h4 class="text-center">Control de cabinas
                  <span class="glyphicon glyphicon-modal-window"></span>
                </h4>

                  <div>
                  <div class="col-md-6">

                    <a style="width: 230px" href="control1.php" class="btn btn-default"> Cabina #1 </a><br>
                    <a style="width: 230px" class="btn btn-default" href="control2.php" > Cabina #2 </a><br>
                    <a style="width: 230px" class="btn btn-default " href="control3.php" > Cabina #3 </a>
                    </div>
                    <div class="col-md-6">
                    <a style="width: 230px" class="btn btn-default " href="control4.php"> Cabina #4</a><br>
                    <a style="width: 230px" class="btn btn-default " href="control5.php"  > Cabina #5</a><br>
                    <a style="width: 230px" class="btn btn-default " href="control6.php"> Cabina #6</a>
                    </div>
                  </div>

                  </div>


          <div class="col-md-6">
            <div style="background: #cccccc">
                <h4 class="text-center">Estado actual de las cabinas</h4>
                <div class="row-fluid">
                 <?php

        require("connect_db.php");
        $sql=("SELECT * FROM cabina WHERE numero>0");

//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
        $query=mysqli_query($mysqli,$sql);

        echo "<table border='1'; class='table table-hover';>";
          echo "<tr class='warning'>";
            echo "<td>Cabinas</td>";
            echo "<td>Recaudado</td>";

          echo "</tr>";

         while($arreglo=mysqli_fetch_array($query)){
            echo "<tr class='success'>";
              echo "<td>$arreglo[0]</td>";
              echo "<td><span>BsF. </span>$arreglo[1]</td>";

          echo "</tr>";
        }
        echo "</table>";
          extract($_GET);
          if(@$idborrar==2){
            $sqlborrar="DELETE FROM persona WHERE cedula=$id";
            $resborrar=mysqli_query($mysqli,$sqlborrar);
            echo '<script>alert("REGISTRO ELIMINADO")</script> ';
            echo "<script>location.href='admin.php'</script>";
          }

      ?>

      </div>
                <!--FIN del estado actual de las cabinas-->
              </div>
              </form>

          </div>


            </div>
        </div>
      </div>
    </div>
    </div>
    <style type="text/css">
      footer{
                text-align:center;
                border-top: 2px solid red;
                font-size: 13px;
                margin-top: 50px;

              }
    </style>
    <footer>
      <p>SERP</p>
    </footer>
    <!-- Placed at the end of the document so the pages load faster -->

<div class="clearfix"></div>
</body>
</html>

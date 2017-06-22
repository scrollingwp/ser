<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['usuario']) {
  header("Location:index.php");
}elseif ($_SESSION['nro_cabina']>=1) {
  header("Location:index2.php");
}
?>
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
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css2/botones.css">
  </head>
  <body style="background: #e0e0e0">
    <div id="carousel-example" data-interval="5000" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active">
          <img src="images\index2img.jpg">
        </div>
        <div class="item">
          <img src="images\pastopografia.jpg">
        </div>
        <div class="item">
          <img src="images\Maracaibo.jpg">
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
          <div class="col-md-12">
            <div class="col-md-6">
              <div class="section">
                <h4 class="text-center">Reportes
                  <i class="fa fa-clipboard fa-fw fa-lg"></i>
                </h4>
                <ul style="margin-left: 100px;" class="lead nav nav-pills">
                  <li class="bor">
                    <a href="exento.php" class="btn btn-default">Exentos</a>
                  </li>
                  <li class="bor">
                    <a href="cierre.php" class="btn btn-default">Cierres</a>
                  </li>
                  <li class="bor">
                    <a href="reporte_total.php" class="btn btn-default">Reporte total</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="section">
                <h4 class="text-center">Control de usuarios
                  <i class="fa fa-child fa-fw fa-lg"></i>
                </h4>
                <ul style="margin-left: 120px;" class="nav nav-tabs">
                  <li class="bor">
                    <a href="registrar.php" class="btn btn-default">Registrar usuario</a>
                  </li>
                  <li class="bor1">
                    <a href="usuarios.php" class="btn btn-default">Modificar usuario</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-12">
              <div class="section">
                <h4 class="text-center">Control de cabinas
                  <i class="fa fa-desktop fa-fw fa-lg"></i>
                </h4>
                <center>
                  <div class="btn-group btn-group-sm">
                    <a class="btn btn-default " href="control1.php" > Cabina #1 </a>
                    <a class="btn btn-default" href="control2.php" > Cabina #2 </span></a>
                    <a class="btn btn-default " href="control3.php" > Cabina #3 </span></a>
                    <a class="btn btn-default " href="control4.php"> Cabina #4 </span></a>
                    <a class="btn btn-default " href="control5.php" style="display:none" > Cabina #5 </span></a>
                    <a class="btn btn-default " href="control6.php"style="display:none"> Cabina #6 </span></a>
                  </div>
                </center>
              </div>
            </div>

          </div>

          <div class="">
            <div class="col-md-12">
              <div style="background: #cccccc">
                <h4 class="text-center">Estado actual de las cabinas</h4>
                <div class="row-fluid">
                 <?php

        require("connect_db.php");
        $sql=("SELECT * FROM cabina");

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

              }
    </style>
    <footer>
      <p>SERP</p>
    </footer>
    <!-- Placed at the end of the document so the pages load faster -->


</body></html>

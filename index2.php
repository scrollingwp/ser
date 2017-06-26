<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['usuario']) {
  header("Location:index.php");
}elseif ($_SESSION['nro_cabina']==10) {
  header("Location:index2.php");
}
?>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="bootstrap/js/jqueryn.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css2/sty.css">
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
                    <?php include( "include/menu.php"); ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div align='center' >
                        <form method="post" action="factura.php" class="formulario" >

                            <div class="col-md-6">
                                <h4 class="text-center">Tipos de vehículos</h4>
                                <ul class="nav nav-stacked">
                                    <div class="col-md-6">
                                        <li class="active">
                                            <div class="radio">
                                                <input type="radio" name="valor" id="puesto" value="1" onclick="habilita(this.form)">
                                                <label for="puesto">Por puesto</label>
                                            </div>
                                        </li>
                                        <br>
                                        <li class="active">
                                            <div class="radio">
                                                <input type="radio" name="valor" id="moto" value="2" onclick="habilita(this.form)">
                                                <label for="moto">Motos 500CC</label>
                                            </div>
                                        </li><br>
                                        <li class="active">
                                            <div class="radio">
                                                <input type="radio" name="valor" id="liv" value="3" onclick="habilita(this.form)">
                                                <label for="liv">Livianos y micro buses</label>
                                            </div>
                                        </li><br>
                                        <li class="active">
                                            <div class="radio">
                                                <input type="radio" name="valor" id="taxi" value="4" onclick="habilita(this.form)">
                                                <label for="taxi">Taxi</label>
                                            </div><br>
                                        </li>
                                        <li class="active">
                                            <div class="radio">
                                                <input type="radio" name="valor" id="buses" value="5" onclick="habilita(this.form)">
                                                <label for="buses">Buses colectivos</label>
                                            </div><br>
                                        </li>
                                        <li class="active">
                                            <div class="radio">
                                                <input type="radio" name="valor" id="camion" value="6" onclick="habilita(this.form)">
                                                <label for="camion">Camión 350 2 ejes</label>
                                            </div><br>
                                        </li>
                                    </div>
                                    <div class="col-md-6">
                                        <li class="active">
                                            <div class="radio">
                                                <input type="radio" name="valor" id="750" value="7" onclick="habilita(this.form)">
                                                <label for="750">Camión 750</label>
                                            </div><br>
                                        </li>
                                        <li class="active">
                                            <div class="radio">
                                                <input type="radio" name="valor" id="expres" value="8" onclick="habilita(this.form)">
                                                <label for="expres">Expresos</label>
                                            </div><br>
                                        </li>
                                        <li class="active">
                                            <div class="radio">
                                                <input type="radio" name="valor" id="3ejes" value="9" onclick="habilita(this.form)">
                                                <label for="3ejes">Pesados 3 ejes</label>
                                            </div><br>
                                        </li>
                                        <li class="active">
                                            <div class="radio">
                                                <input type="radio" name="valor" id="4ejes" value="10" onclick="habilita(this.form)">
                                                <label for="4ejes">Pesados 4 ejes</label>
                                            </div><br>
                                        </li>
                                        <li class="active">
                                            <div class="radio">
                                                <input type="radio" name="valor" id="5ejes" value="11" onclick="habilita(this.form)">
                                                <label for="5ejes">Pesados 5 ejes o más</label>
                                            </div><br>
                                        </li>
                                        <li class="active">
                                            <div class="radio">
                                                <input type="radio" name="valor" id="exte" value="12" onclick="habilita(this.form)">
                                                <label for="exte">Generar Exento</label>
                                            </div>
                                        </li>
                                    </div>

                                </ul>
                            </div>
                               <div class="col-md-6">
                                <iframe src="recibo.php" height="300" width="500"></iframe>
                                </div>

                            <input style="margin-left: 560px;" onclick="texto()" style="margin-top: 10px;" class="btn btn-danger " type="submit" name="imprimir" value="imprimir" disabled="true">

                        </form>
                    </div>
                </div>

            </div>
        </div>
        <script language="javascript">
            function habilita(form)

            {
            form.imprimir.disabled = false;

            }

            function deshabilita(form)
            {
            form.imprimir.disabled = true;
            }
        </script>


        <style type="text/css">
            footer{
                text-align:center;
                border-top: 2px solid red;
                font-size: 13px;
                margin-top: 300px;


              }
        </style>
        <footer style="">
            <p>SERP</p>
        </footer>


</body></html>

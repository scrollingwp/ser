<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">

        <link rel="stylesheet" type="text/css" href="css2/sty.css">
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
                    <?php include( "include/menu.php"); ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div align='center' >
                        <form method="post" action="factura.php" class="formulario" >
                            <div>
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
                              <br>
                            <div class="col-md-12">
                                <iframe src="index.php" height="300" width="500"></iframe>
                            </div>
                            <input onclick="texto()" style="margin-top: 10px;" class="btn btn-danger " type="submit" name="imprimir" value="imprimir" disabled="true">

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
            <p>&copy; Copyright derechos reservados  Wilmer Padilla 2016-2017 telf: 04269242004 correo: wilmerpadilla.1994@gmail.com</p>
        </footer>


</body></html>
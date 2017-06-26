<!DOCTYPE html>
<html>
<head>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
<style type="text/css">

.sobre a{
  color:#fff !important;
  width: 300px;
  font-weight: bold;
}

.sobre span{
  font-size: 25px;
  margin-left: 10px;
}
.navbar-nav{
  background: #c64949 !important;
  border-radius: 5px;
}

.sobre:hover{
  transition: 0.5s;
  background: #892626 !important;
  border-radius: 5px;
}

.navbar-default{
  background: none !important;
  border: none !important;
}
</style>
<body

    <center><div class="navbar navbar-default navbar-static-top">
              <div class="container">
                <div class="navbar-header">
                  <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                    <ul style=" margin-left: 250px ; text-align: center;margin-bottom: 10px;" class="nav navbar-nav navbar-left">
                      <li class="sobre">
                        <a href="cierre_recaudador.php">Generar cierre<span class="glyphicon glyphicon-list-alt"></span></a>
                      </li>

                      <li class="sobre">
                        <a href="desconectar.php" class="">Cerrar Sesión<span class="glyphicon glyphicon-log-out"></span></a>
                      </li>
                    </ul>
                    <br>
                    <ul style="margin-left: 220px;" class="nav navbar-left">
                    <li style="height:10px"><a class="text-center"  style="color: black;">Bienvenido <strong><?php echo $_SESSION['usuario'];?></strong> </a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div></center>
            <div style="margin-bottom: 100px;"></div>
            </body>
            </html>

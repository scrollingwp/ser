<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['usuario']) {
  header("Location:index.php");
}
 ?>
<head>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">

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


    <div class="navbar navbar-default navbar-static-top">
              <div class="container">
                <div class="navbar-header">
                  <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                    <ul style=" margin-left: 250px ; text-align: center;margin-bottom: 10px;" class="nav navbar-nav navbar-left">
                      <li class="sobre">
                        <a href="admin.php">ADMINISTRADOR DEL SITIO<span class="glyphicon glyphicon-list-alt"></span></a>
                      </li>

                      <li class="sobre">
                        <a href="desconectar.php" class="">Cerrar Sesión<span class="glyphicon glyphicon-log-out"></span></a>
                      </li>
                    </ul>
                    <br>
                    <ul style="margin-left: 200px;"" class="nav navbar-left">
                    <li><a class="text-center" href="" style="color: black">Bienvenido <strong><?php echo $_SESSION['usuario'];?></strong> </a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
</html>

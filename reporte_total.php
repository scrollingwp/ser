<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['usuario']) {
	header("Location:index.php");
}
?>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Proyecto Academias</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Wilmer Padilla">

    <link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
  </head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
</header>

  <!-- Navbar
    ================================================== -->


<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class=""><a href="admin.php">ADMINISTRADOR DEL SITIO</a></li>


		</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">

		</form>
		<ul class="nav pull-right">
		<li><a href="">Bienvenido <strong><?php echo $_SESSION['usuario'];?></strong> </a></li>
			  <li><a href="desconectar.php"> Cerrar Cesión </a></li>
		</ul>
	  </div><!-- /.nav-collapse -->
	</div>
  </div><!-- /navbar-inner -->
</div>

<!-- ======================================================================================================================== -->
<div class="row" >


<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		<h2 style="margin-left:200px"> Administración de Reportes</h2>
		<div class="well well-small">
		<hr class="soft"/>
		<h4 style="margin-left:320px">Fechas</h4><br>
		<div class="row-fluid">


		<form action="consultar_reporte_total.php" method="post">
      <div class="form-group">
        <div class="input-group">
          <table style="margin-left:150px">
          <td>Fecha desde<br><input name="fecha_desde" id="fecha_desde" type="date" required class="form-control" ></td>
          <td>Fecha hasta<br><input name="fecha_hasta" id="fecha_hasta" type="date" required class="form-control" ></td>
          <table>
        </div>
      </div>
				<br><input style="margin-left:300px"type="submit" value="Consultar" class="btn btn-success btn-primary">
			</form>

		</div>
		<br/>

<!DOCTYPE html>
<!--?php
session_start();
if (@!$_SESSION['usuario']) {
	header("Location:index.php");
}
?-->
<html lang="en">
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
<div class="row">



	<div class="span12">

		<div class="caption">

<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		<h2> Administración de usuarios registrados</h2>
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Edición de usuarios</h4>
		<div class="row-fluid">

		<?php
		extract($_GET);
		require("connect_db.php");

		$sql="SELECT * FROM persona WHERE cedula=$id";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$nombre=$row[1];
                $apellido=$row[2];
                $usuario=$row[3];
		    	$pass=$row[4];
		    	$cabina=$row[5];
		    }



		?>

		<form action="ejecutaactualizar.php" method="post">
				cedula<br><input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly"><br>
				nombre<br><input type="text" name="nombre" value= "<?php echo $nombre ?>" ><br>
				Apellido<br><input type="text" name="apellido" value= "<?php echo $apellido ?>"><br>
				cabina<br> <input type="text" name="cabina" value="<?php echo $cabina?>"><br>

				<br>
				<input type="submit" value="Guardar" class="btn btn-success btn-primary">
			</form>

		</div>
		<br/>

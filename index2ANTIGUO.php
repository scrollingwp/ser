<!DOCTYPE html>

	<!--?php
	session_start();
	if (@!$_SESSION['usuario']) {
		header("Location:index.php");
	}elseif ($_SESSION['nro_cabina']==1) {
		header("Location:admin.php");
	}
	?-->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>SERP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Wilmer Padilla">
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
		


  </head>
<body data-offset="40" style="background-color: #d8d6d6" >
<style type="text/css">
	
body{
  margin:0;
  text-align:center;
  font-family: Verdana;
  background:#f5f5f5;
}
h1 {
  text-align:center;
}
.container {
  width:90%;
  margin:0 auto;
}
input[type="radio"] {
    display:none;
}
label {
  width:150px;
  float:left;
  text-align:center;
  background:#ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  color:#222222;
  padding:0.5%;
  margin:0.5%;
  margin-bottom:30px;
  cursor:pointer;
}
input[type="radio"][id="blue"]:checked + label {
  background:#6666ff;
}
input[type="radio"][id="blue"]:checked ~ .red, input[type="radio"][id="blue"]:checked ~ .green {
  width:0;
  height:0;
  padding:0;
  margin:0;
  opacity:0;
}
input[type="radio"][id="red"]:checked + label {
  background:#ff4466;
}
input[type="radio"][id="red"]:checked ~ .blue, input[type="radio"][id="red"]:checked ~ .green {
  width:0;
  height:0;
  padding:0;
  margin:0;
  opacity:0;
}
input[type="radio"][id="green"]:checked + label {
  background:#66dd99;
}
input[type="radio"][id="green"]:checked ~ .blue, input[type="radio"][id="green"]:checked ~ .red {
  width:0;
  height:0;
  padding:0;
  margin:0;
  opacity:0;
}

.tile {
  width:23%;
  height:100px;
  float:left;
  transition:all 1s;
  margin:0.5%;
  padding:0.5%;
}
.green {
  background:#66dd99;
}
.blue {
  background:#6666ff;
}




</style>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			
		
<div class="container-fluid">
   <div class="row">
   	<div class="col-md-12">
	<?php
		include("include/menu.php");
	?>
</div>
</div>
</div>
<div style="border: 2px solid red" class="container">


</div>
<h3 align="center" style="color: white">Tipos de vehículos</h3>
<div class="container">
<div class="row" >
<div class="col-md-12">
	<form  method="post" action="factura.php" class="formulario">
		<div class="span3">
		<div class="">
			<ul class="nav nav-pills nav-stacked">
			<div class="section">
			<div class="col-md-6">
				<li class="active">
					<div class="radio">
						<input type="radio" name="sexo" id="puesto" value = "1" onClick="habilita(this.form)">
						<label for="puesto">Por puesto</label>
					</div>
				</li>
				<li class="active">
					<div class="radio">
						<input type="radio" name="sexo" id="moto" value = "2" onClick="habilita(this.form)">
						<label for="moto">Motos 500CC</label>
					</div>
				</li>
				<li class="active">
					<div class="radio">
						<input type="radio" name="sexo" id="liv" value = "3" onClick="habilita(this.form)">
						<label for="liv">Livianos y micro buses</label>
					</div>
				</li>
				<li class="active">
					<div class="radio">
						<input type="radio" name="sexo" id="taxi" value = "4" onClick="habilita(this.form)">
						<label for="taxi">Taxi</label>
					</div>
				</li>
				<li class="active">
					<div class="radio">
						<input type="radio" name="sexo" id="buses" value = "5" onClick="habilita(this.form)">
						<label for="buses">Buses colectivos</label>
					</div>
				</li>
				<li class="active">
					<div class="radio">
						<input type="radio" name="sexo" id="camion" value = "6" onClick="habilita(this.form)">
						<label for="camion">Camión 350 2 ejes</label>
					</div>
				</li>
				</div>
				</div>

						<div style="margin-left: 160px;" class="section">
					<div class="col-md-6">
				<li class="active">
					<div class="radio">
						<input type="radio" name="sexo" id="750" value = "7" onClick="habilita(this.form)">
						<label for="750">Camión 750</label>
					</div>
				</li>
				<li class="active">
					<div class="radio">
						<input type="radio" name="sexo" id="expres" value = "8" onClick="habilita(this.form)">
						<label for="expres">Expresos</label>
					</div>
				</li>
				<li class="active">
					<div class="radio">
						<input type="radio" name="sexo" id="3ejes" value = "9" onClick="habilita(this.form)">
						<label for="3ejes">Pesados 3 ejes</label>
					</div>
				</li>
				<li class="active">
					<div class="radio">
						<input type="radio" name="sexo" id="4ejes" value = "10" onClick="habilita(this.form)">
						<label for="4ejes">Pesados 4 ejes</label>
					</div>
				</li>
				<li class="active">
					<div class="radio">
						<input type="radio" name="sexo" id="5ejes" value = "11" onClick="habilita(this.form)">
						<label for="5ejes">Pesados 5 ejes o más</label>
					</div>
				</li>
				<li class="active">
					<div class="radio">
						<input type="radio" name="sexo" id="exte" value = "12" onClick="habilita(this.form)">
						<label for="exte">Generar Extento</label>
					</div>
				</li>
				</div>
				</div>
				<input type="submit" name="imprimir" value="imprimir" disabled="true">
				</ul>
	</div>
</div>
</form>
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
</div>
</div>
<!-- Footer
      ================================================== -->
<footer class="footer">

<hr class="soften"/>
<p style="color:#D19E5D" align="center">&copy; Copyright derechos reservados  wilmer padilla 2016-2017 telf: 04269242004 correo: wilmerpadilla.1994@gmail.com</p>

 </footer>
 </div>
	</div>
</div><!-- /container -->
 <script src="bootstrap/js/bootstrap.js"></script>
 <script src="bootstrap/js/jquery.js"></script>
		
  </body>
</html>

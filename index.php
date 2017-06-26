<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/loginestilo.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
	<title>Proyecto SERP</title>
</head>
<body background="images/golf1.jpg" style="background-attachment: fixed; background-repeat: no-repeat; background-size: 100% 100%">
<div></div>
<div class="login-page">
<div class="form">
<h4>Iniciar Sesión</h4>
<div style="padding-bottom: 40px"></div>
    <form action="validar.php" method="post" class="login-form">
      <input type="text" name="user" placeholder="Usuario"/>
      <input type="password" name="pass" placeholder="Contraseña"/>
      <input style="background-color: #3a9642" class="btn btn-info" type="submit" value="Aceptar">
      <p class="message">SERP<br>Sistema electrónico de recaudación de peajes</p>
    </form>
  </div>
</div>
	<script type="text/javascript" src="bootstrap/js/jqueryn.min.js"></script>

    <script src="bootstrap/js/index.js"></script>
</body>
</html>

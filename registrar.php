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
<h4>Registrar</h4>

    <div style="padding-bottom: 40px"></div>
    <form name="formu" method="post" action="registro.php" class="login-form">
      <input type="text" name="realname" placeholder="Nombre"/>
      <input type="text" name="nick" placeholder="Correo"/>
      <input type="password" name="pass" placeholder="Contraseña"/>
      <input type="password" name="rpass" placeholder="Repetir contraseña"/>
      <input id="ejec" style="background-color: #3a9642"  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/>
    </form>
   
    
  </div>
</div>

<?php
    if(isset($_POST['submit'])){
      require("registro.php");
    }
  ?>
  <script type="text/javascript" src="bootstrap/js/jqueryn.min.js"></script>
    <script src="bootstrap/js/index.js"></script>
</body>
</html>

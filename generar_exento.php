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
<h4>Generar Exento</h4>

    <div style="padding-bottom: 40px"></div>
    <form name="formu" method="post" action="registro_exento.php" class="login-form">
      <input type="text" name="exento" placeholder="Tipo de exento"/>
      <input type="text" name="placa" placeholder="Placa"/>
      <input id="ejec" style="background-color: #3a9642"  class="btn btn-danger" type="submit" name="submit" value="Generar"/>
    </form>


  </div>
</div>

<?php
    if(isset($_POST['submit'])){
      require("registro_exento.php");
    }
  ?>
  <script type="text/javascript" src="bootstrap/js/jqueryn.min.js"></script>
    <script src="bootstrap/js/index.js"></script>
</body>
</html>

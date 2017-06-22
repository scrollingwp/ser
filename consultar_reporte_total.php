<html>
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
<body>
<?php

	$desde=$_POST['fecha_desde'];

	$hasta=$_POST['fecha_hasta'];
	require("connect_db.php");

      $sql=("SELECT * FROM total_declarado WHERE fecha >='".$desde."' AND fecha <='".$hasta."'");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
      $query=mysqli_query($mysqli,$sql);
      echo "<table border='1'; class='table table-hover';>";
        echo "<tr class='warning'>";
          echo "<td>Id</td>";
          echo "<td>Monto</td>";
          echo "<td>Operador (Cedula)</td>";
          echo "<td>Fecha</td>";
        echo "</tr>";
       while($arreglo=mysqli_fetch_array($query)){

          echo "<tr class='success'>";
            echo "<td>$arreglo[0]</td>";
            echo "<td>$arreglo[1]</td>";
            echo "<td>$arreglo[2]</td>";
            echo "<td>$arreglo[3]</td>";

        echo "</tr>";
      }
?>
</body>
<html>

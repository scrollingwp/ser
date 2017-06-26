<!DOCTYPE html>
<?php
session_start();
$cabina=$_SESSION['nro_cabina'];
$recaudador=$_SESSION['cedula'];
 ?>

<html>
<head>
  <meta charset="utf-8">
  <title>SERP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Joseph Godoy">

  <link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>

  <link rel="shortcut icon" href="assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
</head>
<body >

    <div class="row-fluid">
      <h4>Cierre de las cabinas</h4>
    <?php

        require("connect_db.php");
        $sql=("SELECT * FROM cierre");

//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
        $query=mysqli_query($mysqli,$sql);

        echo "<table border='1'; class='table table-hover';>";
          echo "<tr class='warning'>";
            echo "<td>cabina</td>";
            echo "<td>fecha</td>";
            echo "<td>hora</td>";
            echo "<td>recaudado</td>";
          echo "</tr>";

         while($arreglo=mysqli_fetch_array($query)){
            echo "<tr class='success'>";
              echo "<td>$arreglo[1]</td>";
              echo "<td>$arreglo[3]</td>";
              echo "<td>$arreglo[4]</td>";
              echo "<td>$arreglo[5]</td>";

          echo "</tr>";
        }
        $fecha= date ("Y/n/j");
        $hora= date ("h:i:s");
        $sql2=("SELECT * FROM cabina WHERE numero=$cabina");
        $query2=mysqli_query($mysqli,$sql2);
        while($arreglos=mysqli_fetch_array($query2)){
            $cabinas=$arreglos[0];
            $estado=$arreglos[1];
        }
        mysqli_query($mysqli,"INSERT INTO cierre VALUES('','$cabina','$recaudador','$fecha','$hora','$estado','0')");
        	$sentencia="UPDATE cabina SET estado='0' WHERE numero='$cabina'";
        	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
        	$resent=mysqli_query($mysqli,$sentencia);

        ?>
   </table>
   </tfooter>
      </div><!--FIN del estado actual de las cabinas-->
  </body>

</html>

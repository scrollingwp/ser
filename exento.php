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
<body>
<h4>Exentos de las cabinas</h4>
    <div class="row-fluid">
    <?php

        require("connect_db.php");
        $sql=("SELECT * FROM registro_exento");

//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
        $query=mysqli_query($mysqli,$sql);

        echo "<table border='1'; class='table table-hover';>";
          echo "<tr class='warning'>";
            echo "<td>Id</td>";
            echo "<td>placa</td>";

          echo "</tr>";

         while($arreglo=mysqli_fetch_array($query)){
            echo "<tr class='success'>";
              echo "<td>$arreglo[1]</td>";
              echo "<td>$arreglo[2]</td>";


          echo "</tr>";
        }
        echo "</table>";
          extract($_GET);
          if(@$idborrar==2){
            $sqlborrar="DELETE FROM persona WHERE id=$id";
            $resborrar=mysqli_query($mysqli,$sqlborrar);
            echo '<script>alert("REGISTRO ELIMINADO")</script> ';
            echo "<script>location.href='admin.php'</script>";
          }

      ?>
    </div><!--FIN del estado actual de las cabinas-->
  </body>
</html>

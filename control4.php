<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>SERP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Wilmer Padilla">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css2/botones.css">
  </head>
  <body style="background: #e0e0e0">
    <div style="background: #cccccc">
      <h4 class="text-center">Tabla de Usuarios</h4>

  <?php
      require("connect_db.php");
     $sql=("SELECT * FROM persona WHERE nro_cabina=4");

//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
$query=mysqli_query($mysqli,$sql);

echo "<table border='1'; class='table table-hover';>";
echo "<tr class='warning'>";
  echo "<td>Cedula</td>";
  echo "<td>Usuario</td>";
  echo "<td>Nombre</td>";
  echo "<td>Apellido</td>";
echo "</tr>";

while($arreglo=mysqli_fetch_array($query)){
  echo "<tr class='success'>";
    echo "<td>$arreglo[0]</td>";
    echo "<td>$arreglo[3]</td>";
    echo "<td>$arreglo[1]</td>";
    echo "<td>$arreglo[2]</td>";
echo "</tr>";
}
echo "</table>";
?>
      </div>
      <style type="text/css">
        footer{
                  text-align:center;
                  border-top: 2px solid red;
                  font-size: 13px;

                }
      </style>
      <footer style="">
          <p>SERP</p>
      </footer>
</body>

</html>

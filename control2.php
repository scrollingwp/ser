<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>SERP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Wilmer Padilla">
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
  </head>
  <body style="background: #e0e0e0">
    <div style="background: #cccccc">
      <h4 class="text-center">Tabla de Usuarios</h4>

  <?php
      require("connect_db.php");
     $sql=("SELECT * FROM persona WHERE nro_cabina=2");

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

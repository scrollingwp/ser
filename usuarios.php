<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>SERP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Wilmer Padilla">
    <script type="text/javascript" src="bootstrap/js/jqueryn.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css2/botones.css">
  </head>
  <body style="background: #e0e0e0">
    <div style="background: #cccccc">
      <h4 class="text-center">Tabla de Usuarios</h4>

  <?php
      require("connect_db.php");
     $sql=("SELECT * FROM persona WHERE nro_cabina>0");

//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
$query=mysqli_query($mysqli,$sql);

echo "<table border='1'; class='table table-hover';>";
echo "<tr class='warning'>";
  echo "<td>Cedula</td>";
  echo "<td>Nombre</td>";
  echo "<td>Apellido</td>";
  echo "<td>Usuario</td>";
  echo "<td>cabina</td>";
  echo "<td>Editar</td>";
  echo "<td>Borrar</td>";
echo "</tr>";

while($arreglo=mysqli_fetch_array($query)){
  echo "<tr class='success'>";
    echo "<td>$arreglo[0]</td>";
    echo "<td>$arreglo[1]</td>";
    echo "<td>$arreglo[2]</td>";
    echo "<td>$arreglo[3]</td>";
    echo "<td>$arreglo[5]</td>";

    echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='images/actualizar.gif' class='img-rounded'></td>";
  echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=2'><img src='images/eliminar.png' class='img-rounded'/></a></td>";

echo "</tr>";
}
echo "</table>";
extract($_GET);
if(@$idborrar==2){
  $sqlborrar="DELETE FROM persona WHERE cedula=$cedula";
  $resborrar=mysqli_query($mysqli,$sqlborrar);
  echo '<script>alert("REGISTRO ELIMINADO")</script> ';
  echo "<script>location.href='admin.php'</script>";
}

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

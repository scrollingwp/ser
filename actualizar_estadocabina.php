<?php
session_start();
$valor = $_POST['valor'];
	require("connect_db.php");
  $sql2=("SELECT * FROM cabina");
  $query2=mysqli_query($mysqli,$sql2);
  while($arreglos=mysqli_fetch_array($query2)){
      $cabinas=$arreglos[0];
      $estado=$arreglos[1];
  }

  $sql=("SELECT * FROM tabulador WHERE id_tabulador=$valor");
  $query=mysqli_query($mysqli,$sql);
  while($arreglo=mysqli_fetch_array($query)){
      $id=$arreglo[0];
      $nombre=$arreglo[1];
      $tarifa = $arreglo[2];
  }
  $sumar= $estado+$tarifa;
  echo $cabina;
  echo $sumar;
  $sentencia="UPDATE cabina SET numero='$cabina', estado ='$sumar'  WHERE numero = '$cabina'";
  $resent=mysqli_query($mysqli,$sentencia);
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
	}else {
    echo '<script>alert("ERROR EN CIERRE DE LAS DATOS")</script> ';
		header("location: factura.php");

	}
?>

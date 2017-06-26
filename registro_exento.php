<?php
session_start();
echo $recaudador=  $_SESSION['cedula'];
echo  $cabina=$_SESSION['nro_cabina'];
echo	$name=$_POST['exento'];
echo	$apellido=$_POST['placa'];
echo  $fecha= date ("Y/n/j");
echo  $hora= date ("h:i:s");
	require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");

				mysqli_query($mysqli,"INSERT INTO registro_exento VALUES('','$name','$apellido','$recaudador','$cabina','$fecha','$hora')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("exento realizado con éxito");</script> ';
				echo "<script>location.href='index2.php'</script>";

?>

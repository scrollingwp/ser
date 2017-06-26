<?php
session_start();
$valor = $_POST['valor'];
$recaudador=$_SESSION['usuario'];
$cabina=$_SESSION['nro_cabina'];
$recaudador=$_SESSION['cedula'];
 require("connect_db.php");

 //tabulador
$sql=("SELECT * FROM tabulador WHERE id_tabulador=$valor");
$query=mysqli_query($mysqli,$sql);
while($arreglo=mysqli_fetch_array($query)){
    $id=$arreglo[0];
    $nombre=$arreglo[1];
    $tarifa = $arreglo[2];
}


$fecha= date ("Y/n/j");
$hora= date ("h:i:s");
if ($valor==12) {
  echo "<script>location.href='generar_exento.php'</script>";
}else {
 //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
 				mysqli_query($mysqli,"INSERT INTO registro VALUES('','$id','$recaudador','$cabina','$fecha','$hora')");
}

  $sql2=("SELECT * FROM cabina WHERE numero=$cabina");
  $query2=mysqli_query($mysqli,$sql2);
  while($arreglos=mysqli_fetch_array($query2)){
      $cabinas=$arreglos[0];
      $estado=$arreglos[1];
  }
  $sql3=("SELECT MAX(id_registro) FROM registro");
  $query3=mysqli_query($mysqli,$sql3);
  while($arregloss=mysqli_fetch_array($query3)){
      $facturero=$arregloss[0];
  }

  $sumar= $estado+$tarifa;
  $sentencia="UPDATE cabina SET numero='$cabina', estado ='$sumar'  WHERE numero = '$cabina'";
  $resent=mysqli_query($mysqli,$sentencia);
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
	}
?>
 <!DOCTYPE html>
 <html>
     <head>
         <meta charset="UTF-8">

         <title></title>
         <script type="text/javascript">
             function imprimir() {
                 if (window.print) {
                     window.print();
                 } else {
                     alert("La función de impresion no esta soportada por su navegador.");
                 }
             }
         </script>
     </head>
     <body onload="window.print()">
         <CENTER><H6>GOBIERNO BOLIVARIANO DE VENEZUELA<br>
           GOBERNACIÓN BOLIVARIANA DEL ZULIA<br>
           (SERVIALEZ)<br>
           PEAJE "NOMBRE DEL PEAJE"<br>
           G-200117877<br>
           RECIBO DE PAGO<br>
           RECIBO
           FECHA
           HORA
           CABINA
            MONTO<br>
          <?php echo $facturero  ?>
            <?php  $fecha= date ("j/n/Y"); echo $fecha; ?>
            <?php date_default_timezone_set('America/Caracas'); $hora= date ("G:i:s" ,time()-3600); echo $hora; ?>
           <?php echo $cabina ?>     Bsf.<?php echo $tarifa ?><br>
            <?php echo $nombre ?><br>
           CAJERO:<?php echo $_SESSION['usuario'];?><br>
           ¡GOBERNAR ES HACER!<br>
           EL ZULIA NOMBRE Y LUZ DE VENEZUELA<br>
           FELIZ VIAJE<br>TELEFONO AUXILIO VIAL - 04265620419
           <br>RECLAMOS Y SUGERENCIA - 0426-5620408</H6></CENTER>
     </body>
 </html>

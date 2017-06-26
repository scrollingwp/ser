<!DOCTYPE html>
<?php
session_start();
 require("connect_db.php");

 ?>
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
    <body >
        <CENTER><H6>GOBIERNO BOLIVARIANO DE VENEZUELA<br>GOBERNACIÓN BOLIVARIANA DEL ZULIA<br>(SERVIALEZ)<br><br>PEAJE "MOJAN"<br>G-200117877<br>RECIBO DE PAGO<br>RECICO     FECHA     HORA     CABINA     MONTO<br>00000000     31/05/2017     02:42PM     CAB 1     Bsf.100<br>NOMBRE DEL VEHICULO<br>CAJERO:<?php echo $_SESSION['usuario'];?><br>¡GOBERNAR ES HACER!<br>EL ZULIA NOMBRE Y LUZ DE VENEZUELA<br>FELIZ VIAJE<br>TELEFONO AUXILIO VIAL - 04265620419<br>RECLAMOS Y SUGERENCIA - 0426-5620408</H6></CENTER>

    </body>
</html>

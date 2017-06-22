<?php
	require("connect_db.php");

$sql2=mysqli_query($mysqli,"SELECT tarifa FROM tabulador WHERE id_tabulador=1");
$f1=mysqli_fetch_assoc($sql2);
	?>
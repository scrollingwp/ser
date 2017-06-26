<?php

	$name=$_POST['realname'];
	$apellido=$_POST['lastname'];
	$user=$_POST['nick'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];
	$cedula=$_POST['cedula'];
	require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM persona WHERE usuario='$user'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe una cuenta designado para este usuario, verifique sus datos");</script> ';
			}else{

				mysqli_query($mysqli,"INSERT INTO persona (cedula, nombre, apellido, usuario, contrasenia, nro_cabina, cargo_id, recaudadoradmin) VALUES ('$cedula', '$name', '$apellido', '$user', '$pass', '1', '2', '0');");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				echo "<script>location.href='index.php'</script>";

			}

		}else{
			echo 'Las contraseñas son incorrectas';
		}


?>

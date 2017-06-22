<?php

	$name=$_POST['realname'];
	$apellido=$_POST['apellido'];
	$user=$_POST['nick'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];
	$cedula=$_POST['cedul'];
	require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM persona WHERE nombre='$user'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe una cuenta designado para este usuario, verifique sus datos");</script> ';
			}else{

				mysqli_query($mysqli,"INSERT INTO persona VALUES('$cedula','$name','$apellido','$user','$pass','0','2')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				echo "<script>location.href='index.php'</script>";

			}

		}else{
			echo 'Las contraseñas son incorrectas';
		}


?>

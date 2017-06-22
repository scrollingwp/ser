
<?php

session_start();
	require("connect_db.php");

	$username=$_POST['user'];
	$pass=$_POST['pass'];


	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$sql2=mysqli_query($mysqli,"SELECT * FROM persona WHERE usuario='$username'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['recaudadoradmin']){
			$_SESSION['cedula']=$f2['cedula'];
			$_SESSION['usuario']=$f2['usuario'];

			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='admin.php'</script>";

		}
	}


	$sql=mysqli_query($mysqli,"SELECT * FROM persona WHERE usuario='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['contrasenia']){
			$_SESSION['cedula']=$f['cedula'];
			$_SESSION['usuario']=$f['usuario'];
			$_SESSION['nro_cabina']=$f['nro_cabina'];

			header("Location: index2.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';

			echo "<script>location.href='index.php'</script>";
		}
	}else{

		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';

		echo "<script>location.href='index.php'</script>";

	}

?>

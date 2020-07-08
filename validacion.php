<?php 	

session_start();

$usuario = $_POST['usuario'];
echo $usuario;
$contrasena = $_POST['contrasena'];
echo $contrasena;
include("conexion.php");

$query = "SELECT * FROM docentes WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
	

	$resultado = $conexion->query($query);

	
	if ($row = $resultado->fetch_assoc()) {


		if ($row['idEstado'] == '1') {
			$_SESSION['usuario'] = $row['usuario'];
			$_SESSION['u_usuario'] = $row['nombres'];
			header("Location: index.php");
		} else {
			$_SESSION['usuario'] = $row['usuario'];
			$_SESSION['u_usuario'] = $row['nombres'];
			header("Location: login.php");
		}

	} else {
		header("Location: login.php");
	}
	

 ?>
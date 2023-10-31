<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro</title>
</head>

<body>

<?php
	$name = $_POST['name'];
	$mail = $_POST['mail'];
    $clave = md5($_POST['clave']);
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];


	include("conexion.php");

	$consulta = mysqli_query($conexion, "INSERT INTO usuarios VALUES(0, '$name','$mail','$clave', '$nombre', '$apellido')");


	header("Location:formLogin.html");

?>	
    

</body>
</html>
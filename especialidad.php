<?php
$nombre =$_POST['nombre'];
$descripcion = $_POST['descripcion'];

//conectar a la base de datos
$conexion=mysqli_connect("localhost","root", "1842","ortoonline");
$insertar = "INSERT INTO especialidad (nombre, descripcion) VALUES ('".$nombre."','".$descripcion."')";
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
	echo 'Error al registrarse';
}
else {
	echo 'Especialidad registrada exitosamente';
}
mysqli_close($conexion);
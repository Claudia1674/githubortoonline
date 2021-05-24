<?php

$cedula = $_POST['cedula'];
$nombre =$_POST['nombre'];
$celular = $_POST['celular'];
$especialidad = $_POST['especialidad'];

//conectar a la base de datos
$conexion=mysqli_connect("localhost","root", "1842","ortoonline");
$insertar = "INSERT INTO tecnico (cedula, nombre, celular, especialidad) VALUES (".$cedula.",'".$nombre."', ".$celular.", '".$especialidad."')";
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
	echo 'Error al registrarse';
}
else {
	echo 'Técnico registrado exitosamente';
}
mysqli_close($conexion);
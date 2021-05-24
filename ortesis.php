<?php
$codigoProducto = $_POST['codigoProducto'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$valor = $_POST['valor'];
//conectar a la base de datos
$conexion=mysqli_connect("localhost","root", "1842","ortoonline");
$insertar = "INSERT INTO ortesis (codigoProducto, nombre, descripcion, valor) VALUES (".$codigoProducto.",'".$nombre."','".$descripcion."', ".$valor.")";
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
	echo 'Error al registrarse';
}
else {
	echo 'Producto registrado exitosamente';
}
mysqli_close($conexion);
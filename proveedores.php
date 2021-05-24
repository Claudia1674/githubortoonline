<?php
$nit = $_POST['nit'];
$nombre = $_POST['nombre'];
$producto = $_POST['producto'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
//conectar a la base de datos
$conexion=mysqli_connect("localhost","root", "1842","ortoonline");
$insertar = "INSERT INTO proveedores (nit, nombre, producto, telefono, correo) VALUES (".$nit.",'".$nombre."', '".$producto."','".$telefono."', '".$correo."')";
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
	echo 'Error al registrarse';
}
else {
	echo 'Proveedor registrado exitosamente';
}
mysqli_close($conexion);
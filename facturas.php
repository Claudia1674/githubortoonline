<?php
$nombreCliente =$_POST['nombreCliente'];
$cedula = $_POST['cedula'];
$fecha = $_POST['fecha'];
$producto = $_POST['producto'];
$descripcion = $_POST['descripcion'];
$cantidad = $_POST['cantidad'];
$valor = $_POST['valor'];

//conectar a la base de datos
$conexion=mysqli_connect("localhost","root", "1842","ortoonline");
$insertar = "INSERT INTO facturas (nombreCliente, cedula, fecha, producto, descripcion, cantidad, valor) VALUES ('".$nombreCliente."',".$cedula.",'".$fecha."', '".$producto."','".$descripcion."', '".$cantidad."', ".$valor.")";
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
	echo 'Error al registrarse';
}
else {
	echo 'Factura registrada exitosamente';
}
mysqli_close($conexion);
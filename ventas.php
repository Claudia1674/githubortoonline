<?php
$cedulaCliente = $_POST['cedulaCliente'];
$idProducto = $_POST['idProducto'];
$cedulaTecnico = $_POST['cedulaTecnico'];
$cantidad = $_POST['cantidad'];
$valor = $_POST['valor'];

//conectar a la base de datos
$conexion=mysqli_connect("localhost","root", "1842","ortoonline");
$insertar = "INSERT INTO ventas (cedulaCliente, idProducto, cedulaTecnico, cantidad, valor) VALUES (".$cedulaCliente.", ".$idProducto.", ".$cedulaTecnico.", ".$cantidad.", ".$valor.")";
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
	echo 'Error al registrarse';
}
else {
	echo 'Venta registrada exitosamente';
}
mysqli_close($conexion);
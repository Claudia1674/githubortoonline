<?php
$fecha = $_POST['fecha'];
$proveedor = $_POST['proveedor'];
$nit = $_POST['nit'];
$articulo = $_POST['articulo'];
$cantidad = $_POST['cantidad'];
$descripcion = $_POST['descripcion'];
$costoUnitario = $_POST['costoUnitario'];
$costoTotal = $_POST['costoTotal'];
$aprobadoPor = $_POST['aprobadoPor'];
$recibidoPor = $_POST['recibidoPor'];

//conectar a la base de datos
$conexion=mysqli_connect("localhost","root", "1842","ortoonline");
$insertar = "INSERT INTO insumos(fecha, proveedor, nit, articulo, cantidad, descripcion, costoUnitario, costoTotal, aprobadoPor, recibidoPor, ) VALUES ('".$fecha."','".$proveedor."', ".$nit.", '".$articulo."', ".$cantidad.", '".$descripcion."', ".$costoUnitario.", ".$costoTotal.", '".$aprobadoPor."', '".$recibidoPor."')";
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
	echo 'Error al registrarse';
}
else {
	echo 'Artículo registrado exitosamente';
}
mysqli_close($conexion);
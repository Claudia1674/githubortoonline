<?php
$conexion = mysqli_connect("localhost","root","1842","ortoonline");
$nombre = $_POST["nombre"];
$cedula = $_POST["cedula"];
$fecha = $_POST["fecha"];
$idProducto = $_POST["idProducto"];
$descripcion = $_POST["descripcion"];
$cantidad = $_POST["cantidad"];
$valor = $_POST["valor"];
if($subirarchivo){
	$insertarSQL = "INSERT INTO facturas(
id, nombre, cedula, fecha, idProducto, descripcion, cantidad, valor) VALUES ('$id','$nombre','$cedula','$fecha','$idProducto','$descripcion','$cantidad','$valor')";
$resultado = mysqli_query($conexion,$insertarSQL);
if($resultado){
	echo "<script>alert('Se ha registrado la factura'); window.location='home.html'</script>";
}else{
	printf("Errormessage: %s\n", mysqli_error($conexion));
}
}
}
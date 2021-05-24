<?php
$cedula = $_POST['cedula'];
$nombre =$_POST['nombre'];
$celular = $_POST['celular'];
$fechaNacimiento = $_POST['fechaNacimiento'];
$historiaClinica = $_POST['historiaClinica'];
$codigoProducto = $_POST['codigoProducto'];
$sexo = $_POST['sexo'];
$tipo = $_POST['tipo'];
$ocupacion = $_POST['ocupacion'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];

//conectar a la base de datos
$conexion=mysqli_connect("localhost","root", "1842","ortoonline");
$insertar = 
"INSERT INTO paciente (cedula, 	nombre, celular, fechaNacimiento, historiaClinica, codigoProducto, 	sexo, tipo, ocupacion, direccion, correo) 
VALUES (".$cedula.",'".$nombre."', ".$celular.", '".$fechaNacimiento."','".$historiaClinica."', ".$codigoProducto.", '".$sexo."',  '".$tipo."', '".$ocupacion."', '".$direccion."', '".$correo."')";
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
	echo 'Error al registrarse';
}
else {
	echo 'Paciente registrado exitosamente';
}
mysqli_close($conexion);
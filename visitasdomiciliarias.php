<?php
$responsable =$_POST['responsable'];
$especialidad = $_POST['especialidad'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$cedulaPaciente = $_POST['cedulaPaciente'];
$nombrePaciente = $_POST['nombrePaciente'];


//conectar a la base de datos
$conexion=mysqli_connect("localhost","root", "1842","ortoonline");
$insertar = "INSERT INTO visitasdomiciliarias (responsable, especialidad, fecha, hora, cedulaPaciente, nombrePaciente) VALUES ('".$responsable."',".$especialidad.",'".$fecha."', '".$hora."', ".$cedulaPaciente.", '".$nombrePaciente."')";
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
	echo 'Error al registrarse';
}
else {
	echo 'Visita domiciliaria registrada exitosamente';
}
mysqli_close($conexion);
<?php
$email=$_POST['email'];
$clave=$_POST['clave'];

//conectar a la base de datos
$conexion=mysqli_connect("localhost","root", "1842","ortoonline");
$consulta="SELECT * FROM usuario WHERE email='$email' and clave='$clave'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);
if ($filas>0) {
	header("location:bienvenido.html");
}
else {
	echo "Error en la autenticación";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
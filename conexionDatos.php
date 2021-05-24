<?php
	function Conectarse(){
		$user = "root";
		$pass = "1842";
		$server = "localhost";
		$db = "ortoonline";
		$con = new mysqli($server,$user,$pass,$db);
		if($con->connect_error){
			die("Conexión fallida: ". $con->connect_error);
		}else{
			return $con;
		}
	}
?>
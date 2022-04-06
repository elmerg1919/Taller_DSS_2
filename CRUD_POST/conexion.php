<?php 
function conexion(){
	$host = "host=localhost";
	$port = "port=5432";
	$dbname = "dbname=Alumnos";
	$user = "user=postgres";
	$password = "password=12345";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;

	//PRUEBA DE CONEXION
	if ($db) {
		echo "CONEXION EXITOSA";
	}
	else {
		echo "Error en la conexion: ".pg_last_error();
	}
}

//echo conexion();
?>
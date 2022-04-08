<?php
include 'conexion.php';

$con=conexion();
$id = $_GET["t"];


?>

<?php
$sql = "Select * from Estudiante where id = $id"
$obj = pg_query($con,$sql)
$fila = pg_fetch_array($obj)
 
?>


<?php
include 'conexion.php';
$con = conexion();

$id = $_GET["t"];

$sql = "delete from Estudiante where idestudiante='$id'";
pg_query($con, $sql);

header("location:listar.php");
?>
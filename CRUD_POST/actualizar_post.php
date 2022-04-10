<?php
include 'conexion.php';

$con=conexion();
$idp=$_POST["idp"];
$doc = $_POST["doc"];
$nom = $_POST["nom"];
$ape = $_POST["ape"];
$dir = $_POST["dir"];
$cel = $_POST["cel"];

$sql = "update estudiante set carnet='$doc',nombre='$nom',apellido='$ape',municipio='$dir',departamento='$cel'
where idestudiante='$idp'";
pg_query($con,$sql);

header("location:listar.php");
?>
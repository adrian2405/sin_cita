<?php 
include("funciones.php");
$id = $_GET['id'];
delete('horarios','id',$id);
header("location:index.php");
?>
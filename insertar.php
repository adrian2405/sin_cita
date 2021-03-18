<?php 

include("funciones.php");
$id = $_GET['id'];
insertar('horarios_info','id',$id);
header("location:index.php");
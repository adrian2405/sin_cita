<?php 

// Aquí se recogen los valores para activar la función delete y te redirige de nuevo a index

include("funciones.php");
$id = $_GET['id'];
delete('horarios','id',$id);
header("location:index.php");
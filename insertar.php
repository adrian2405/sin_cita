<?php 

// Aquí se recogen los valores para activar la función delete y te redirige de nuevo a index

include("funciones.php");
$hora = $_GET['hora'];
insertar('horarios_info',$hora);
header("location:index.php");
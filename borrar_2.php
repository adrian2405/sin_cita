<?php
	include 'conexion.php';
	$name=$_POST['name'];
	$sql_info = "DELETE FROM `horarios_info_2` WHERE hora = '$name'";
	if (mysqli_query($conn, $sql_info)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}

	$sql = "DELETE FROM `horarios` WHERE hora = '$name'";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
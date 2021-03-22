<?php
	include 'conexion.php';
	$name=$_POST['name'];

	$sql = "DELETE FROM `horarios_info`";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}

	$sql = "INSERT INTO `horarios_info`(`hora`) 
	VALUES ('$name')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
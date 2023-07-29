<?php
	include 'settings.php';
	//$name=$_POST['name'];
	$email=$_POST['email'];
	
	$select = mysqli_query($conn, "SELECT `email` FROM `email_subscribe` WHERE `email` = '".$email."'") or exit(mysqli_error($conn));

	if(mysqli_num_rows($select)) {
		echo json_encode(array("statusCode"=>202));
	}
	else {
		$sql = "INSERT INTO `email_subscribe`(`email`) 
		VALUES ('$email')";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo json_encode(array("statusCode"=>201));
		}
	}
	mysqli_close($conn);
?>
<?php
	$conn = mysqli_connect("127.0.0.1","root","","college");
	

	$name = $_POST['name'];
	$email = $_POST['email'];
	$cont = $_POST['contact'];
	$strSql = "INSERT INTO student(`name`, `email`, `contact`) VALUES('$name', '$email', '$cont')";

	if(mysqli_query($conn, $strSql)) {
		echo "Record SUccessfully Inserted!!!";
	} else {
		echo mysqli_error($conn);
	}
?>	
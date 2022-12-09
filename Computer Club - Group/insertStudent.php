<?php
	include 'dbconn.php';
	
	$name = $_POST['name'];
	$ic = $_POST['ic'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$class = $_POST['class'];
	$age = $_POST['age'];
	$telephone = $_POST['telephone'];
	
	$sql = "INSERT INTO STUDENT (name, ic, username, password, address, gender, email, class, age, telephone) 
			VALUES ('$name', '$ic', '$username', '$password', '$address', '$gender', '$email', '$class', '$age', '$telephone')";
	
	 if (mysqli_query($conn, $sql)) {
		echo "<script> alert('Record Successfully Created!');</script>";
		header("Refresh: 0; url=viewStudent.php?ic=$ic");
	 } else {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
?>

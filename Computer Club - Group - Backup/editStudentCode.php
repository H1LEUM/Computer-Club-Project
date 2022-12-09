<?php
include 'dbconn.php';
?>

<?php
if (isset($_POST['save'])){
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
    

	$sql = "UPDATE student SET name = '$name', username = '$username', password = '$password', address = '$address', gender = '$gender', email = '$email', class = '$class', age = '$age', telephone = '$telephone' WHERE ic = '$ic'";
	if($conn->query($sql) === TRUE) {
        echo "<script> alert('Record Successfully Updated!');</script>";
		header("Refresh: 0; url=viewStudent.php?ic=$ic");
		
    } else {
        echo "Erorr while updating record : ". $conn->error;
		header("Refresh: 0; url=editStudent.php?ic=$ic");
    }
 
    $conn->close();
}
?>
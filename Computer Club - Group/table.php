<?php
include 'dbconn.php';
$ic = $_GET['ic'];
$query = "Select * from student WHERE ic = '$ic'";
$result = mysqli_query($conn, $query)or die("Query failed");

while ($row4 = mysqli_fetch_array($result)) {
    $name = $row4['name'];
	$username = $row4['username'];
    $ic = $row4['ic'];
    $password = $row4['password'];
    $adress = $row4['adress'];
    $gender = $row4['gender'];
    $email = $row4['email'];
    $class = $row4['class'];
	$age = $row4['age'];
    $telephone = $row4['telephone'];
  }


?>

<?php
if (isset($_POST['save'])){
    $name = $_POST['name'];
	$ic = $_POST['ic'];
	$username = $_POST['username'];
    $password = $_POST['password'];
    $adress = $_POST['address'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $class = $_POST['class'];
	$age = $_POST['age'];
    $telephone = $_POST['telephone'];
    
	if(isset($_POST['add']))
	{
		if(!empty($_POST['add']))
		{
			foreach($_POST['add'] as $selected)
			{
				$addOn = $addOn.$selected." ";
			}
		}
	}
	else
	{
		$addOn = "-";
	}
	
	
	$sql = "UPDATE student SET name = '$name', username = '$username', password = '$password', adress = '$adress', gender = '$gender', class = '$class', age = '$age', telephone = '$telephone' WHERE ic = '$ic'";
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

<script>
function validateForm() {
  var name = document.forms["myForm"]["name"].value;
  var ic = document.forms["myForm"]["ic"].value;
  var username = document.forms["myForm"]["username"].value;
  var password = document.forms["myForm"]["password"].value;
  var address = document.forms["myForm"]["address"].value;
  var email = document.forms["myForm"]["email"].value;
  var age = document.forms["myForm"]["age"].value;
  var telephone = document.forms["myForm"]["telephone"].value;
  
  if (name == "") {
    alert("Name must be filled out");
    return false;
  } else if (name.length > 50){
  	alert("Name must be 50 or below characters");
    return false;
  }
  
  if(username == ""){
	alert("Username must be filled out");
    return false;
  } else if(username.length<5 || username.length>12){
	alert("Username must be 5 to 12 character only");
    return false;
  }
  
  if(password == ""){
	alert("Password must be filled out");
    return false;
  } else if(password.length<5 || password.length>12){
	alert("Password must be 5 to 12 character only");
    return false;
  }
	
  if(address == ""){
	alert("Address must be filled out");
    return false;
  }
  
  if(email == ""){
	alert("Email must be filled out");
    return false;
  }
  
  if(age == ""){
	alert("Age must be filled out");
    return false;
  }
  
  if(telephone == ""){
	alert("Telephone must be filled out");
    return false;
  }
}
</script>
<head>
<?php include 'element/head.php';

?>
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include 'element/header.php';

?>
<!-- End Header -->
  <br><br><br>
     <!-- ======= Contact Section ======= -->
    <div id="registration" class="contact-area">
      <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Registration</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start  contact -->
            <div class="col-md-6">
              <div class="form contact-form">
                <form action="insertStudent.php" method="post" role="form" class="form contact-form" onsubmit="return validationForm()" name="myForm">


                  <div class="form-group mt-3">
                    <input type="text" name="name" class="form-control" id="name" value="<?php echo $name; ?>" >
                  </div>

                  <div class="form-group mt-3">
                    <input type="text" name="username" class="form-control" id="username" value="<?php echo $username; ?>" >
                  </div>


                  <div class="form-group mt-3">
                    <input type="password" name="password" class="form-control" id="password" value="<?php echo $password; ?>" >
                  </div>


                  <div class="form-group mt-3">
                    <textarea class="form-control" name="address" rows="5" id="adress"><?php echo $adress; ?></textarea>
                 </div>


                  <div class="form-group mt-3">
                    <p>Gender</p>
                      <div class="radio">
                        <label><input type="radio" name="gender" value="male" >Male</label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" name="gender" value="female" >Female</label>
                      </div>
                  </div>


                  <div class="form-group mt-3">
                    <input type="email" name="email" class="form-control" id="email" value="<?php echo $email; ?>">
                  </div>


                  <div class="form-group mt-3">
                  <div class="select">
                      <select id="class" name="class">
                        <option value="M3CS2306A">M3CS2306A</option>
                        <option value="M3CS2306B">M3CS2306B</option>
                  </div>
                </div>


                  <div class="form-group mt-3">
                    <input type="number" name="age" class="form-control" id="age" value="<?php echo $age; ?>">
                  </div>


                  <div class="form-group mt-3">
                    <input type="number" name="telephone" class="form-control" id="telephone" value="<?php echo $telephone; ?>" >
                  </div>
                  
                  <br>
				  
                  <div class="text-center"><button type="reset" class="btn btn-dark">Reset</button></div>
                  <br>
                  <div class="text-center"><button class="btn" onClick="return confirm('Confirmation to save record?')" name = "save"><b>Save</b>
                  
                </form>
              </div>
            </div>
            <!-- End Left contact -->
          </div>
        </div>
      </div>
    </div><!-- End Contact Section -->

  </main><!-- End #main -->

<!-- ======= Footer ======= -->
<!-- End  Footer -->
<?php include 'element/footer.php';

?>

</body>

</html>
<?php
include 'dbconn.php';

$ic = $_GET['ic'];
$query = "Select * from student WHERE ic = '$ic'";
$result = mysqli_query($conn, $query)or die("Query failed");

while ($row = mysqli_fetch_array($result)) {
    $name = $row['name'];
	  $username = $row['username'];
    $ic = $row['ic'];
    $password = $row['password'];
    $address = $row['address'];
    $gender = $row['gender'];
    $email = $row['email'];
    $class = $row['class'];
	  $age = $row['age'];
    $telephone = $row['telephone'];
  }
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

<script>
function validationForm() {
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
                <h2>Update Student</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start  contact -->
            <div class="col-md-12">
              <div class="form contact-form">
                <form action="editStudent.php" method="post" role="form" class="form contact-form" onsubmit="return validationForm()" name="myForm">


                <div class="form-group row">
                <label for="" class="col-sm-1 text-end control-label col-form-label">Name</label>
                <div class="col-sm-11">
                    <input type="text" name="name" class="form-control" id="name" value="<?php echo $name; ?>" >
                  </div>
                </div>

                <div class="form-group row">
                <label for="" class="col-sm-1 text-end control-label col-form-label"></label>
                <div class="col-sm-11">
                    <input type="hidden" name="ic" class="form-control" id="ic" value="<?php echo $ic; ?>" >
                  </div>
                </div>

                <br>

                <div class="form-group row">
                <label for="" class="col-sm-1 text-end control-label col-form-label">Username</label>
                <div class="col-sm-11">
                    <input type="text" name="username" class="form-control" id="username" value="<?php echo $username; ?>" >
                  </div>
                </div>

                <br>

                <div class="form-group row">
                <label for="" class="col-sm-1 text-end control-label col-form-label">Password</label>
                <div class="col-sm-11">
                    <input type="password" name="password" class="form-control" id="password" value="<?php echo $password; ?>" >
                  </div>
                </div>

                <br>

                <div class="form-group row">
                <label for="" class="col-sm-1 text-end control-label col-form-label">Address</label>
                <div class="col-sm-11">
                    <textarea class="form-control" name="address" rows="5" id="address"><?php echo $address; ?></textarea>
                 </div>
                </div>

                <br>

                <div class="form-group row">
                <label for="" class="col-sm-1 text-end control-label col-form-label">Gender</label>
                <div class="col-sm-11">
                      <div class="radio">
                        <label><input type="radio" name="gender" value="male" required>Male</label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" name="gender" value="female" required>Female</label>
                      </div>
                  </div>
                </div>

                <br>

                <div class="form-group row">
                <label for="" class="col-sm-1 text-end control-label col-form-label">Email</label>
                <div class="col-sm-11">
                    <input type="email" name="email" class="form-control" id="email" value="<?php echo $email; ?>">
                  </div>
                </div>

                <br>

                <div class="form-group row">
                <label for="" class="col-sm-1 text-end control-label col-form-label">Class</label>
                <div class="col-sm-11">
                  <div class="select">
                      <select id="class" name="class">
                        <option value="M3CS2306A">M3CS2306A</option>
                        <option value="M3CS2306B">M3CS2306B</option>
                  </div>
                </div>
                </div>

                <br>

                <div class="form-group row">
                <label for="" class="col-sm-1 text-end control-label col-form-label">Email</label>
                <div class="col-sm-11">
                    <input type="hidden" name="hidden" class="form-control" id="hidden" placeholder="hidden" >
                  </div>
                </div>

                <br>

                  <div class="form-group row">
                <label for="" class="col-sm-1 text-end control-label col-form-label">Age</label>
                <div class="col-sm-11">
                    <input type="number" name="age" class="form-control" id="age" value="<?php echo $age; ?>">
                  </div>
                </div>

                <br><br>

                <div class="form-group row">
                <label for="" class="col-sm-1 text-end control-label col-form-label">Telephone</label>
                <div class="col-sm-11">
                    <input type="number" name="telephone" class="form-control" id="telephone" value="<?php echo $telephone; ?>" >
                  </div>
                </div>
                  
                  <br><br><br>
				  
                  <div class="text-center"><button type="reset" class="btn btn-dark">Reset</button></div>
                  <br><br>
                  <div class="text-center"><button class="btn btn-dark" onClick="return confirm('Save record?')" name = "save"><b>Save</b>
                  
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

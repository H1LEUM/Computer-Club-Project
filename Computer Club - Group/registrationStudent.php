<!DOCTYPE html>
<html lang="en">
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
  
  if(ic == ""){
  alert("IC must be filled out");
    return false;
  } else if(!/^[0-9]+$/.test(ic)){
    alert("Please input without hyphen and in number only");
    return false;
  } else if(ic.length != 12){
    alert("Please input ic exactly 12 number");
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
            <div class="col-md-12">
              <div class="form contact-form">
                <form action="insertStudent.php" method="post" role="form" class="form contact-form" onsubmit="return validationForm()" name="myForm">


                <div class="form-group row">
                <label for="" class="col-sm-1 text-end control-label col-form-label">Name</label>
                <div class="col-sm-11">
                    <input type="text" name="name" class="form-control" id="name"  >
                  </div>
                </div>

                <br>

                <div class="form-group row">
                <label for="" class="col-sm-1 text-end control-label col-form-label">IC</label>
                <div class="col-sm-11">
                    <input type="text" name="ic" class="form-control" id="ic"  >
                  </div>
                </div>

                <br>

                <div class="form-group row">
                <label for="" class="col-sm-1 text-end control-label col-form-label">Username</label>
                <div class="col-sm-11">
                    <input type="text" name="username" class="form-control" id="username"  >
                  </div>
                </div>

                <br>

                <div class="form-group row">
                <label for="" class="col-sm-1 text-end control-label col-form-label">Password</label>
                <div class="col-sm-11">
                    <input type="password" name="password" class="form-control" id="password"  >
                  </div>
                </div>

                <br>

                <div class="form-group row">
                <label for="" class="col-sm-1 text-end control-label col-form-label">Address</label>
                <div class="col-sm-11">
                    <textarea class="form-control" name="address" rows="5" id="address"></textarea>
                 </div>
                </div>

                <br>

                <div class="form-group row">
                <label for="" class="col-sm-1 text-end control-label col-form-label">Gender</label>
                <div class="col-sm-11">
                      <div class="radio">
                        <label><input type="radio" name="gender" value="Male" required>Male</label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" name="gender" value="Female" required>Female</label>
                      </div>
                  </div>
                </div>

                <br>

                <div class="form-group row">
                <label for="" class="col-sm-1 text-end control-label col-form-label">Email</label>
                <div class="col-sm-11">
                    <input type="email" name="email" class="form-control" id="email" >
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

                <br><br>

                <div class="form-group row">
                <label for="" class="col-sm-1 text-end control-label col-form-label">Email</label>
                <div class="col-sm-11">
                    <input type="hidden" name="hidden" class="form-control" id="hidden"  >
                  </div>
                </div>

                <br><br>

                  <div class="form-group row">
                <label for="" class="col-sm-1 text-end control-label col-form-label">Age</label>
                <div class="col-sm-11">
                    <input type="number" name="age" class="form-control" id="age" >
                  </div>
                </div>

                <br><br><br>

                <div class="form-group row">
                <label for="" class="col-sm-1 text-end control-label col-form-label">Telephone</label>
                <div class="col-sm-11">
                    <input type="number" name="telephone" class="form-control" id="telephone"  >
                  </div>
                </div>
                  
                  <br><br><br>
				  
                  <div class="text-center"><button type="reset" class="btn btn-dark">Reset</button></div>
                  <br><br>
                  <div class="text-center"><button type="submit"  value="submit" class="btn btn-dark">submit</button></div>
                  
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
<!DOCTYPE html>
<html lang="en">

<script>
function validationForm() {

  var ic = document.forms["myForm"]["search"].value;
  
  if(ic == ""){
	alert("IC must be filled out");
    return false;
  } else if(!/^[0-9]+$/.test(ic)){
	alert("Please input without hyphen and in number only");
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
                <h2>Search Student</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start  contact -->
            <div class="col-md-12">
              <div class="form contact-form">

                <form method="post" action="searchStudent.php"  role="form" class="form contact-form" onsubmit="return validationForm()" name="myForm">

                <div class="form-group row">
                <label for="" class="col-sm-1 text-end control-label col-form-label">IC</label>
                <div class="col-sm-11">
                    <input type="text" name="search" class="form-control" id="search"  >
                  </div>
                </div>

                <br>

                <div class="text-center"><button type="submit" value="submit" class="btn btn-dark">Submit</button></div>

                  </div>
                  
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
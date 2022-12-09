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

  <!-- ======= hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/5.png)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown"></h2>
                <p class="animate__animated animate__fadeInUp"></p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <div id="about" class="about-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>About This Club</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single-well start-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-left">
              <div class="single-well">
                <a href="#">
                  <img src="assets/img/about/4.jpg" alt="">
                </a>
              </div>
            </div>
          </div>
          <!-- single-well end-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-middle">
              <div class="single-well">
                <a href="#">
                  <h4 class="sec-head">The Cybernauts</h4>
                </a>
                <p>
                  The computer club was established to promote student  learning and collaboration in all things related to computers and technology. Students meet to discuss emerging topics in the field of computing, gain experience with hardware and software, and explore computer technology in general. No experience required.
                </p>
                <ul>
                  <li>
                    <i class="bi bi-check"></i> Learning Programming Language
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Doing Robotics
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Reparing Computer
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Program Games
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Build Websites
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- End col-->
        </div>
      </div>
    </div><!-- End About Section -->

    <!-- ======= Blog Section ======= -->
    <div id="activities" class="blog-area">
      <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Activities News</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start Left Blog -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="assets/img/blog/7.jpg" alt="">
                  </a>
                </div>
                <div class="blog-meta">
                  <!-- <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">13 comments</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                  </span> -->
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="#">Reparing Student Computer</a>
                  </h4>
                  <p>
                    The computer repair initiative for students enables students who live in dorms to repair their broken computers or laptops without sending them to a shop, and this computer repair service is free.
                  </p>
                </div>
              </div>
              <!-- Start single blog -->
            </div>
            <!-- End Left Blog-->
            <!-- Start Left Blog -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="assets/img/blog/8.jpg" alt="">
                  </a>
                </div>
                <div class="blog-meta">
                  <!-- <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">130 comments</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                  </span> -->
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="blog.html">Programmimg Language Class</a>
                  </h4>
                  <p>
                    The programming classes were created to make it easier for students to learn and understand one programming language based on their interests.This will further increase their interest in the field of programming.
                  </p>
                </div>
              </div>
              <!-- Start single blog -->
            </div>
            <!-- End Left Blog-->
            <!-- Start Right Blog-->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="assets/img/blog/9.jpg" alt="">
                  </a>
                </div>
                <div class="blog-meta">
                  <!-- <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">10 comments</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                  </span> -->
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="blog.html">Robotic Program</a>
                  </h4>
                  <p>
                    Robotics classes are also offered in computer clubs to attract students who enjoy building robots and improve the functionality of the robot's ability to do things. The school has also set aside a sum of money to advance the field of robotics.
                  </p>
                </div>
              </div>
            </div>
            <!-- End Right Blog-->
          </div>
        </div>
      </div>
    </div><!-- End Blog Section -->

    <!-- ======= Contact Section ======= -->
    <div id="contact" class="contact-area">
      <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Contact us</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-phone"></i>
                  <p>
                    Office Phone<br>
                    <span>093101242</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-printer"></i>
                  <p>
                    Fax<br>
                    <span>093101241</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-envelope"></i>
                  <p>
                    School Email<br>
                    <span>CEE3037@moe.edu.my</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-geo-alt"></i>
                  <p>
                    Club Address<br>
                    <span>Km 1 Jalan Lipis-Raub
                      27200 Kuala Lipis
                      Pahang</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-envelope"></i>
                  <p>
                    Club Email<br>
                    <span>theCybernauts@gmail.com</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-google"></i>
                  <p>
                    School Website<br>
                    <span>https://smkcliffordlipis.edupage.org/</span>
                  </p>
                </div>
              </div>
            </div>
            
          </div>
          <div class="row">

            <!-- Start  contact -->
            <div class="col-md-6">
             
            </div>
            <!-- End Left contact -->
          </div>
        </div>
      </div>
    </div><!-- End Contact Section -->
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
                        <label><input type="radio" name="gender" value="Male" >Male</label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" name="gender" value="Female" >Female</label>
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
    </div>

    

  </main><!-- End #main -->

<!-- ======= Footer ======= -->
<!-- End  Footer -->
<?php include 'element/footer.php';

?>

</body>

</html>
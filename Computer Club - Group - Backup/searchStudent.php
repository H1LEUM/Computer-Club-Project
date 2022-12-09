<!DOCTYPE html>
<html lang="en">
<?php include 'dbconn.php';
?>
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
    <div id="search" class="contact-area">
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
            <div class="col-md-14">
              <div class="form contact-form">

              <table >
			<th width = "250px">Name</th>
			<th width = "250px">IC</th>
			<th width = "250px">Password</th>
			<th width = "400px">Address</th>
			<th width = "250px">Gender</th>
			<th width = "250px">Email</th>
			<th width = "250px">Class</th>
            <th width = "250px">Age</th>
			<th width = "250px">Telephone</th>

			</tr>
			<?php

                $search=$_POST['search'];
                $sql = "SELECT * FROM student WHERE ic = '$search' ";
                $result = $conn->query($sql);
                if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {?>

				  <td><?php echo $row['name']; ?></td>
				  <td><?php echo $row['ic']; ?></td>
                  <td><?php echo $row['password']; ?></td>
				  <td><?php echo $row['address']; ?></td>
				  <td><?php echo $row['gender']; ?></td>
				  <td><?php echo$row['email']; ?></td>
				  <td><?php echo$row['class']; ?></td>
                  <td><?php echo$row['age']; ?></td>
                  <td><?php echo$row['telephone']; ?></td>
				  
                  </tr>
				<?php } ?>
				
				<?php } else { ?>
				<?php echo "<tr><td colspan='10' bgcolor = '#FFFFFF'><center>No Data Available </center></td></tr>"  .$search; ?>
				
			<?php } ?>
		</table>



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
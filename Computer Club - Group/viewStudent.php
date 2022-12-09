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
                <h2>View Student</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start  contact -->
            <div class="col-md-12">
              <div class="form contact-form">

              <table >
			<th width = "250px">Name</th>
			<th width = "250px">IC</th>
			<th width = "250px">Username</th>
			<th width = "350px">Address</th>
			<th width = "250px">Gender</th>
			<th width = "250px">Email</th>
			<th width = "250px">Class</th>
            <th width = "250px">Age</th>
			<th width = "250px">Telephone</th>
			<th width = "250px" colspan = "3" >Manage</th>
			</tr>
			<?php

				$sql = "SELECT * FROM student ";
				$result = $conn->query($sql);
				if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {?>

				  <td><?php echo $row['name']; ?></td>
				  <td><?php echo $row['ic']; ?></td>
                  <td><?php echo $row['username']; ?></td>
				  <td><?php echo $row['address']; ?></td>
				  <td><?php echo $row['gender']; ?></td>
				  <td><?php echo$row['email']; ?></td>
				  <td><?php echo$row['class']; ?></td>
                  <td><?php echo$row['age']; ?></td>
                  <td><?php echo$row['telephone']; ?></td>
				  <td><a href="editStudent.php?ic=<?php echo $row['ic']; ?>"  onclick = "return confirm('Edit this record?')">Edit</a></td>
				  <td> &nbsp<a href="deleteStudent.php?ic=<?php echo $row['ic']; ?>"  onclick = "return confirm('Delete this record?')">Delete</a></td>
                  </tr>
				<?php } ?>
				
				<?php } else { ?> 
				<?php  echo "<tr><td colspan='10' ><center>No Data Available </center></td></tr>"; ?> <?php } ?>
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